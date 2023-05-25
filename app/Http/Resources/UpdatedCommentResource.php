<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UpdatedCommentResource extends JsonResource
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
            'post_id' => $this->post_id,
            'comment' => $this->content,
            //'user_id' => $this->user_id,
            'commentator' => $this->whenLoaded('commentator'),
            'updated_at' => date_format($this->updated_at,"d/m/Y H:i:s"),
            'message' => 'Comment edited'

        ];
    }
}
