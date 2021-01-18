<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = [
        'name', 'discription','year','origin','type_id', 'name_artist'];

    public function categories()
	{
    return $this->belongsToMany('App\Category', 'items_has__categories');      
	}
	public function subjects()
	{
    	return $this->belongsToMany('App\Subject');      
	}
	public function types()
	{
    	return $this->belongsTo('App\Type' , 'type_id');      
	}
	public function users()
	{
    	return $this->belongsTo('App\User', 'users_id');      
	}

	public function offers()
	{
    	return $this->belongsToMany('App\User', 'offers');
	}

}
