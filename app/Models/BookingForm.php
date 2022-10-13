<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingForm extends Model
{
    use HasFactory;
    protected $table = 'booking_forms';

    protected $fillable = [
        'fullname','phone','email','address',
    ];
}
