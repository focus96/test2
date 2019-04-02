<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['photo', 'album_id'];

    public function album()
    {
        return $this->belongsToMany(Album::class);
    }
}
