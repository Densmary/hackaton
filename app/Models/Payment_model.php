<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay_model extends Model
{

    static $rules=
    [
        'ccn'=> 'required',
        'password'=> 'required'
    ];
    protected $table="crops";
    protected $fillable=
    [
     "ccn", "date"
    ];

   public function menmber()
    {
    return $this->hasOne(Membership::class);
    }
}
