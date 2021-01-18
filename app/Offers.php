<?php

namespace App;

use Illuminate\Database\Eloquent\\Relations\Pivot;

class Offers extends Pivot
{
    //
    protected $fillable = [
        'price','user_id','item_id'
    ];
    
}
