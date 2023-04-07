<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    use HasFactory;
    protected $fillable = ['colorID', 'colorName', 'description'];
    protected $table = 'colors';
    protected $primaryKey = 'colorID';
    public $timestamps = false;
}
