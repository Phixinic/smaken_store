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
        return $this->belongsTo(Category::class);
    }
    
    public $table = 'product_master';
    protected $fillable = [
        'name',
        'price',
        'category_id',
        'user_id',
        'slug',
        'description',
        'status',
        'image'       
    ];
    use HasFactory;
}
