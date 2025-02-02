<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name', 'path', 'size', 'type', 'is_private'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
