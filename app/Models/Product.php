<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable =['name','cost_price','sale_price','description'];
    public  function oderDetail()
    {
        return  $this->hasMany('App\Models\OrderDetail');
    }

    public function productCategory()
    {
        return  $this->belongsTo('App\Models\ProductCategory');
    }
}
