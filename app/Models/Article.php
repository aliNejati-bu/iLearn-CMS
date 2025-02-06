<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'tags', 'image', 'category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getTagsInArrayAttribute()
    {
        return explode(',', $this->tags);
    }

    public function scopeSearch($builder)
    {
        if (request()->has('q')) {
            $builder->where('title', 'like', '%' . request()->input('q') . '%');
        }

        return $builder;
    }
}
