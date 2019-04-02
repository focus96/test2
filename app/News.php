<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['name', 'description'];

    public function getByName(string $name) 
    {
    	return $this->where('name', $name)->get();
    }
}
