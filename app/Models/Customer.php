<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Customer
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $order
 * @mixin \Eloquent
 */
class Customer extends Model
{
    //
    public function order()
    {
        return  $this->hasMany('App\Models\Order');
    }
}
