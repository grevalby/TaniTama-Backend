<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'image_url' => $this->image_url,
            //'user_id' => $this->user_id,
            'author' => $this->author,
            'created_at' => $this->created_at,
            'total_comments' => $this->whenLoaded('comments',function () {
                return $this->comments->count();
            })            
        ];

    }
}
