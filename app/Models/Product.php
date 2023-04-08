<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // public $product = 'product';
    public $table = 'product';
    protected $fillable = ['productID','productname','price','categoryID','sizeID','colorID','images','description'];
    protected $primaryKey = 'productID';
    public $timestamps = false;
    public $incrementing = false;
    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    public function size()
    {
        return $this->belongsTo(Size::class,'sizeID');
    }
    
   



    public function category()
    {
        return $this->belongsTo(Category::class,'categoryID');
    }

    public function color()
    {
        return $this->belongsTo(Color::class,'colorID');
    }

}

