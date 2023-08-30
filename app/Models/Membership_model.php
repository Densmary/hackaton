<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership_model extends Model
{
   protected $table= 'crops';
   protected $fillable=
   [
    "id", "payment", "ccn", "duration", "id_pay", "id_user"
   ];

   public function us()
   {
     return $this->hasOne(User::class); 
   }

   
}
