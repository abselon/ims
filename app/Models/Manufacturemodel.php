<?php

namespace App\Models;

use App\Models\Productsmodel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manufacturemodel extends Model
{
    use HasFactory;

    protected $table = 'manufacture';
    protected $fillable = 
    [
        'name',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(Productsmodel::class, 'manufacture_id');
    }
}
