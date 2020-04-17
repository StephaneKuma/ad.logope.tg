<?php

namespace App\Models;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'category_id', 'title', 'slug', 'verse', 'image', 'body'];

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
        return $this->belongsToMany(Tag::class);
    }

    public function saveTags(string $tags)
    {
        $tags = array_filter(array_unique(array_map(function ($item) {
            return trim($item);
        }, explode(',', $tags))), function ($item) {
            return !empty($item);
        });

        if (empty($tags)) {
            return false;
        }

        $persisted_tag = Tag::whereIn('name', $tags)->get();

        $tags_to_create = array_diff($tags, $persisted_tag->pluck('name')->all());
        $tags_to_create = array_map(function ($tag) {
            return ["name" => $tag, 'slug' => Str::slug($tag)];
        }, $tags_to_create);

        $created_tags = $this->tags()->createMany($tags_to_create);
        $persisted_tag = $persisted_tag->merge($created_tags);
        $this->tags()->sync($persisted_tag);
    }
}
