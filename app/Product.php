<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'categorie_id', 'brand_id', 'photo'
    ];

    protected $hidden = [
        'categorie_id', 'brand_id', 'enviador', '_token',
    ];

    public function categorie(){
        return $this->BelongsTo(Categorie::class);
    }

    public function brand(){
        return $this->BelongsTo(Brand::class);
    }

    public function scopeSearch($query, $s)
    {
        return $query->where('name', 'LIKE', '%' . $s . '%')
            ->orWhere('description', 'LIKE', '%' . $s . '%');
    }
   
}
