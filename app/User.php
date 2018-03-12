<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends BaseModel
{
    protected $table = "users";

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    public static function getInstance($data){
        return ( isset($data['id']) ) ? User::find($data['id']) : new User() ;
    }
}
