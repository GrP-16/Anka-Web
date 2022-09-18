<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantDetials extends Model
{
    use HasFactory;
    protected $table = 'participantdetails';
    //fillable
    protected $fillable = [
        'name',
        'points',
        'DateOfBirth',
    ];
}
