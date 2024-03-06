<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MassSchedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'MassDay',
        'MassTimeSchedule',
    ];
}
