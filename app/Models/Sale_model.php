<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_model extends Model
{
    protected $table="crops";
    protected $fillable=
    [
        "id", "dates", "id_user", "id_product"
    ];

    public function proc()
    {
        return $this->hasMany(Product::class);
    }

    public function userrs()
    {
        return $this->hasOne(User::class);
    }

}
