<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TourProgram extends Model {

	protected $table = 'tour_programs';

	protected $fillable = ['name','description','dest','starttime','datenum','transportation','itinerary','cost','image','place_id2','user_id2'];

	public $timestamps = false;

	public function bltcate(){
		return $this->belongTo('App\Cate');
	}

	public function bltplace(){
		return $this->belongTo('App\Place');
	}

	public function bltuser(){
		return $this->belongTo('App\User');
	}

}
