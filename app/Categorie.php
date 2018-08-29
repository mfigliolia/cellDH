<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['name'];

    public function product() {
        return $this->belongsToMany(Product::class);
    }

    public function brand() {
        return $this->belongsToMany(Brand::class);
    }
}
