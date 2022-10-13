<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'services';

    protected $fillable = [
        'id','service_name','code_name', 'Specification_description','quantity','unit_price','price',
    ];
}
