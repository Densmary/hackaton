<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User_model extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     static $rules =
     [
        'name'=> 'required',
        'email'=> 'required',
        'password'=> 'required',
        'age'=> 'required',
       //ESTE ES UN COMENTARIO
     ];

     protected $perPage= 20;
     protected $fillable = [
        'name',
        'email',
        'password',
        'age',
         'membership',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    public function memb()
    {
       return $this->hasMany(Membership::class);
    }

    public function mes()
    {
        return $this->hasMany(Message::class);
    }

    public function pro()
    {
        return $this->hasMany(Product::class);
    }

    public function pur()
    {
        return $this->hasMany(Purchase::class);
    }

    public function sal()
    {
        return $this->hasMany(Sale::class);
    }
}