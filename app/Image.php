<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
	
   protected $fillable = ['gallery_id', 'file_name', 'file_size', 'file_path', 'created_by', 'id'];

	public function gallery(){
		return $this->belongsTo('App\Gallery');
	}
}
