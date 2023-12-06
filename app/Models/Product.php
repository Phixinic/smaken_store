<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function user(){
        return $this->hasOne(User::class);
    }
    public function category(){
        return $this->hasOne(Category::class);
    }
    
    public $table = 'product_master';
    protected $fillable = [
        'name',
        'price',
        'description',
        'status',       
    ];
    use HasFactory;
}
