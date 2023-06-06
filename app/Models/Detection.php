<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detection extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'image_url', 'disease_id', 'time_predict', 'accuracy'
    ];

    public function detector(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function result(): BelongsTo
    {
        return $this->belongsTo(Disease::class, 'disease_id', 'id');
    }
}

