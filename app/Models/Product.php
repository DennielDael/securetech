<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model 
{
    use HasFactory;
   
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $appends = ['product_image'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

   
}