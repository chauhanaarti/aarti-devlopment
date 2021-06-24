<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class user extends Model 
{
    // use Notifiable;
    // use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =['id',
        'first_name','last_name','email','mobile','adress'
          ];

   

    public $updated_at = false;
     public static function userlist(){
      $query = user::get();
        return $query;
     }

}