<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends BaseModel
{
    protected $table = "reservationlog";

    protected $fillable = [
        'res_number',
        'pc_name' ,
        'starttime' ,
        'endtime' ,
        'student' ,
        'active' ,
    ];

    protected $primaryKey = "res_number";

    public static function getInstance($data){
        return ( isset($data['id']) ) ? Log::find($data['id']) : new Log() ;
    }
}
