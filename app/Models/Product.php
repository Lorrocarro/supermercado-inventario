<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Habilitar la asignación masiva para estas columnas
    protected $fillable = ['name', 'barcode', 'price', 'stock', 'category'];
}
