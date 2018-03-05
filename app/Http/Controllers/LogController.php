<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;

class LogController extends Controller
{
    /* Columns:
     * id, res_number,
     * pc_name, starttime,
     * endtime, student,
     * active, *timestamps */

    public function all(){
        $result = Log::all();

        $json = json_encode($result);
        return $json;
    }
    public function get($id){
        $result = Log::find($id);

        $json = json_encode($result);
        return $json;
    }


    public function all_columns($columns){

        $columns = explode("&", $columns);
        $result = Log::all($columns);

        $json = json_encode($result);
        return $json;
    }
    public function get_columns($id, $columns){
        $columns = explode("&", $columns);
        $result = Log::all($columns)->where('id', '=', $id);

        $json = json_encode($result);
        return $json;
    }

    public function all_where($condition, $condition2 = null){

        $condition = explode('&', $condition);
        $condition[2] = str_replace('+', ' ', $condition[2]);
        if(isset($condition2)){
            $condition2 = explode('&', $condition2);
            $condition2[2] = str_replace('+', ' ', $condition2[2]);
            $result = Log::all()
                ->where($condition[0], $condition[1], $condition[2])
                ->where($condition2[0], $condition2[1], $condition2[2]);
        } else {
            $result = Log::all()
                ->where($condition[0], $condition[1], $condition[2]);
        }

        $json = json_encode($result);
        return $json;
    }
    public function get_where($id, $condition, $condition2 = null){

        $condition = explode('&', $condition);
        $condition[2] = str_replace('+', ' ', $condition[2]);
        if(isset($condition2)){
            $condition2 = explode('&', $condition2);
            $condition2[2] = str_replace('+', ' ', $condition2[2]);
            $result = Log::all()
                ->where('id', '=', $id)
                ->where($condition[0], $condition[1], $condition[2])
                ->where($condition2[0], $condition2[1], $condition2[2]);
        } else {
            $result = Log::all()
                ->where('id', '=', $id)
                ->where($condition[0], $condition[1], $condition[2]);
        }

        $json = json_encode($result);
        return $json;
    }

    public function all_columns_where($columns, $condition){

        $columns = explode("&", $columns);
        $condition = explode('&', $condition);
        $condition[2] = str_replace('+', ' ', $condition[2]);

        $result= Log::all($columns)
            ->where($condition[0], $condition[1], $condition[2]);

        $json = json_encode($result);
        return $json;
    }
    public function get_columns_where($id, $columns, $condition){
        $columns = explode("&", $columns);
        $condition = explode('&', $condition);
        $condition[2] = str_replace('+', ' ', $condition[2]);

        $result= Log::all($columns)
            ->where('id', '=', $id)
            ->where($condition[0], $condition[1], $condition[2]);

        $json = json_encode($result);
        return $json;
    }
}
