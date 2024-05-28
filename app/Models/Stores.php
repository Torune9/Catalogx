<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'image',
        'description',
        'from_date',
        'to_date',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function catalogs(){
        return $this->hasMany(Product::class,'store_id');
    }
}
