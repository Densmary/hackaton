<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_model extends Model
{
   protected $table="crops";
   protected $fillable= 
   [
   "messages", "media", "id_user"//A futuro seleccion de id de usuario a enviar mensaje en automatico//
   ];

   public function use()
   {
        return $this->hasOne(User::class);
   }
}
