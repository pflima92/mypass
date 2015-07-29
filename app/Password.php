<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'passwords';

    public  $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','url', 'description','username', 'password'];
}
