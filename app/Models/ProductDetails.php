<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;
    protected $table = 'productdetails';
    protected $fillable = [
        'product',
        'quantity_left',
        'quantity',
        'price',
        'description',
    ];
}
