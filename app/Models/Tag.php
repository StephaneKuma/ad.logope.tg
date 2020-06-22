<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag', 'post_id', 'tag_id');
    }

    public function sermons()
    {
        return $this->belongsToMany(Sermon::class, 'sermon_tag', 'sermon_id', 'tag_id');
    }
}
