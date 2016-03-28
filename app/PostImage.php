<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model {

	protected $table = 'post_images';

	protected $fillable = ['images','post_id'];

	public $timestamps = false;

	public function bltpost(){
		return $this->belongTo('App\Post');
	}

}
