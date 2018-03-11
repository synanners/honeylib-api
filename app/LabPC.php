<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabPC extends BaseModel
{
    protected $table = "labpc";

    protected $fillable = [
        'pc_name',
        'ip_address',
        'in_use'
    ];

    public static function getInstance($data){
        return ( isset($data['id']) ) ? LabPC::find($data['id']) : new LabPC() ;
    }
}
