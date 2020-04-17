<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'posts_count', 'sermons_count'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function sermons()
    {
        return $this->hasMany(Sermon::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
