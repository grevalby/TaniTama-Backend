<?php

namespace App\Http\Middleware;

use App\Models\Detection;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetectionAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $currentUser = Auth::user();
        $detection = Detection::findOrFail($request->id);
      
     
        if($detection->user_id != $currentUser->id) {
             return response()->json(['message' => 'Detection history not found'], 404);
         }

        return $next($request);
    }
}
