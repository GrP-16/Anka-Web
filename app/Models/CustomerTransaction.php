<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTransaction extends Model
{
    use HasFactory;
    protected $table = 'customertransactions';
    protected $fillable = [
        'name',
        'productbought',
        'quantitybought',
        'totalprice',
        'address',
    ];
}
