<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector_model extends Model
{

    static $rules=
    [
        'name'=> 'require',
        'category'=>'require'
    ];


    protected $table='crops';
    protected $fillable= 
    
    [
         "names", "description", "category"
    ];

    public function prod()
    {
        return $this->hasMany(Product::class);
    }
}
