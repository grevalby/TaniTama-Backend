<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'image_url', 'user_id'
    ];

    //protected $with = 'author:id,name,photo';

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    
}
