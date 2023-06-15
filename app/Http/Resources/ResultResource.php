<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResultResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->whenLoaded('detector'),
            'image_url' => $this->image_url,
            //'author' => $this->author,
            'result' => $this->whenLoaded('result'),
            'accuracy' => $this->accuracy,
            'time_predict' =>$this->time_predict,            
            'created_at' => $this->created_at
        ];

    }
}
