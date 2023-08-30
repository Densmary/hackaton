<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector_model extends Model
{
    protected $table='crops';
    protected $fillable= 
    [
        "id", "names", "description", "category"
    ];

    public function prod()
    {
        return $this->hasMany(Product::class);
    }
}
