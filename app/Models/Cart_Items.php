<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Items extends Model
{
    use HasFactory;



    protected $table = 'cart_items';

    protected $primaryKey = 'cart_id';

    protected $fillable = ['productID','productname','price','categoryID','sizeID','colorID','images','description'];


    protected $with = ['product'];

    public function product()
    {
        // return $this->hasMany('App\Models\Product');    
        return $this->belongsTo(Product::class);
    }

    public function getTotalAttribute()
    {
        return $this->product_price * $this->product_amount;
    }

}
