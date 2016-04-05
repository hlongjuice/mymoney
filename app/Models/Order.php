<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function customer()
    {
        return  $this->belongsTo('App\Models\Customer');
    }

    public function orderDetail()
    {
        return $this->hasMany('App\Models\OderDetail');
    }

}
