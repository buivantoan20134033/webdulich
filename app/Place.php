<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model {

	protected $table = 'places';

	protected $fillable = ['name'];

	public $timestamps = false;

	public function post (){
		return $this->hasMany('App\Post');
	}

	public function tp (){
		return $this->hasMany('App\TourProgram');
	}



}
