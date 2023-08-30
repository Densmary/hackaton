<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_model extends Model
{
   protected $table="crops";
   protected $fillable= 
   [
    "id", "messages", "media", "id_user"
   ];

   public function use()
   {
        return $this->hasOne(User::class);
   }
}
