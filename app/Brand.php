<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name'];

    public function product() {
        return $this->belongsToMany(Product::class);
    }

    public function categorie() {
        return $this->belongsToMany(Categorie::class);
    }
}
