<?php

namespace App\Models;

use App\Models\Productsmodel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategorymodel extends Model
{
    use HasFactory;
    protected $table = 'subcategories';

    protected $fillable = 
    [
        'name',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categories_id');
    }

    public function products()
    {
        return $this->hasMany(Productsmodel::class, 'subcategories_id');
    }
}
