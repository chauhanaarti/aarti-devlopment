<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;


class post extends Model 
{
    // use Notifiable;
    // use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =['id',
        'title','defination','image','user_fk',
          ];

   

    public $updated_at = false;
     public static function postlist(){
      $query = post::get();
        return $query;
     }

}