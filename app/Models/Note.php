<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $quarded = [];
    protected $hidden = [];

   	public function category()
   	{
   		return $this->belongsTo(\App\Models\Category::class);
   	}
   	
}
