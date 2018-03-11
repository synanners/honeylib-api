<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends BaseModel
{
    protected $table = "students";

    protected $primaryKey = "student_num";

    protected $fillable = [
        'student_num',
        'name',
        'course',
        'timein',
        'timeout',
        'img',
        'lastlogin',
        'active',
    ];


    public static function getInstance($data){
        return ( isset($data['id']) ) ?
            Student::find($data['id']) : new Student() ;
    }
}
