<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    use HasFactory;
    protected $fillable = ['sizeID', 'sizeName', 'description'];
    protected $table = 'sizes';
    protected $primaryKey = 'sizeID';
    public $timestamps = false;
    public function Product(){
        return $this->hasMany(Product::class);
    }
}
