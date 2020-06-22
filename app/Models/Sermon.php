<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    protected $fillable = ['user_id', 'category_id', 'title', 'image', 'verse', 'serie', 'audio', 'video', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'semon_tag', 'sermon_id', 'tag_id');
    }
}
