<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'stock',
        'image',
        'description',
        'store_id',
        'category_id',
    ];
    public function store(){
        return $this->belongsTo(Stores::class);
    }
    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
