<?php

namespace App;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Role;
use App\Models\Sermon;
use App\Models\Category;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'last_name', 'first_name', 'address', 'phone', 'email', 'password', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hasRole()
    {
        return $this->role->name;
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function sermons()
    {
        return $this->hasMany(Sermon::class);
    }

    public function isEditor()
    {
        return $this->role->id === 2;
    }

    public function isAdmin()
    {
        return $this->role->id === 1;
    }
}
