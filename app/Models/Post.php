<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";

    public function tags(): HasMany
    {
        return $this->hasMany(PostTagModel::class, 'post_id', 'id');
    }
}
