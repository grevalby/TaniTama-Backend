<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetailResultResource;
use App\Http\Resources\ResultResource;
use App\Models\Detection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DetectionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'file' => 'required|image'
        ]);

        //upload file
        if ($request->file) {
            $randomName = Str::random(20);
            $extension = $request->file->extension();
            $newName = $randomName.'.'.$extension;

            Storage::putFileAs('detections', $request->file, $newName);
            $newName = 'https://storage.googleapis.com/tanitama_bucket/detections/'.$newName;
        }

        $response = Http::post('https://api-model-b2qrwylyqq-as.a.run.app/predict', [
            'image' => $newName
        ]);

        $result = $response->json('prediction'); 
        $timePredict = $response->json('time_predict');
        $accuracy = $response->json('accuracy');

        $request['user_id'] = Auth::user()->id;
        $request['image_url'] = $newName;
        $request['disease_id'] = $result;
        $request['time_predict'] = $timePredict;
        $request['accuracy'] = $accuracy;
        $detection = Detection::create($request->all());
        return new ResultResource($detection->loadMissing(['detector:id,name','result']));
    }

    public function index()
    {
        $user = Auth::user()->id;
        $history = Detection::where('user_id','=',$user)->latest()->get();
        return ResultResource::collection($history->loadMissing(['detector:id,name','result:id,name,description,recomendation,sample_img']));

    }

    public function show($id)
    {
        $detection = Detection::with(['detector:id,name,photo','result:id,name,description,recomendation,sample_img'])->findOrFail($id);
        return new ResultResource($detection);
    }

    public function destroy($id)
    {
        $detection = Detection::findOrFail($id);
        
        $detection->delete();
        return response()->json(['message' => 'Detection Deleted'], 204);

    }
}
