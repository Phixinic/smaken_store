<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function product(){
        return $this->hasMany(Product::class);
    }
    public $table = 'category';
    protected $fillable = [
        'parentId',
        'name',       
        'slug',       
    ];
    use HasFactory;
}
