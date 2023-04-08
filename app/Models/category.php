<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['categoryID', 'categoryName', 'description'];
    protected $table = 'categories';
    protected $primaryKey = 'categoryID';
    public $timestamps = false;
    public function Product(){
        return $this->hasMany(Product::class);
    }
}
