<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $product) {
            $product -> string('productID');
            $product -> string('productname');
            $product -> float('price');
            $product -> string('sizeID');
            $product -> string('colorID');
            $product -> string('images');
            $product -> string('categoryID');
            $product -> string('description');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
