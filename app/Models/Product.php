<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    
    public $table = 'product_master';
    protected $fillable = [
        'name',
        'price',
        'description',
        'status',       
    ];
    use HasFactory;
}
