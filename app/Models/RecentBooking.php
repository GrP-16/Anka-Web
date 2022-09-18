<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentBooking extends Model
{
    use HasFactory;
    protected $table = 'recentbookings';
    protected $fillable = [
        'product',
        'quantity',
        'unitprice',
        'totalcost',
        'deliveryaddress',
        'user_id',
    ];

}
