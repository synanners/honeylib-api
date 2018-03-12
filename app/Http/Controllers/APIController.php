<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\ClassFactory as CF;

class APIController extends Controller
{

    public function insert($table, $att){

        if(
            $table !== 'LabPC' and
            $table !== 'Log' and
            $table !== 'Student' and
            $table !== 'User'
        ){
            return "Error on Table name: ".$table;
        }

        //set string as column values
        $attr = explode(',', $att);
        //replace %20 as spaces
        $attr = str_replace('%20', ' ', $attr);

        //at this point we have
        //table, attributes
        $result = CF::model($table)->saveData($attr);

        if($result['status'] == 'success'){
            echo "<h1>Success!</h1><br/>";
            dd($result);
            //return json_encode("status: ok");
        } else {
            dd($result);
            //return json_encode($result);
        }
    }

    public function update($table, $id, $att){

        //Table
        if(
            $table !== 'LabPC' and
            $table !== 'Log' and
            $table !== 'Student' and
            $table !== 'User'
        ){
            return json_encode("message: error on table/model name");
        }

        //ID
        $attr['id'] = $id;

        //Columns
        $attr = array_merge($attr, explode(',', $att));
        $attr = str_replace('%20', ' ', $attr);

        $result = CF::model($table)->editData($attr);

        if($result['status'] == 'success'){
            echo "<h1>Success!</h1><br/>";
            dd($result);
            //return json_encode("status: ok");
        } else {
            dd($result);
        }
    }
}
