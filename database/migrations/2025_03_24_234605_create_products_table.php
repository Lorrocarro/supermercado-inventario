<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  

    /**
     * Reverse the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del producto
            $table->string('barcode')->unique(); // Código de barras
            $table->decimal('price', 10, 2); // Precio
            $table->integer('stock'); // Cantidad en stock
            $table->string('category'); // Categoría
            $table->timestamps();
        });
    }
    
};
