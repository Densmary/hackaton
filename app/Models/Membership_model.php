<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership_model extends Model
{
   protected $table= 'crops';
   protected $fillable=
   [
    "payment", "ccn", "duration", "id_pay", "id_user" //A futuro selección de id_pay e id_user atumático//
   ];

   public function us()
   {
     return $this->hasOne(User::class); 
   }

   
}
