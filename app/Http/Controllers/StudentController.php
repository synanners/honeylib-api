<?php

namespace App\Http\Controllers;

use App\Student;

class StudentController extends Controller
{
    public function all(){
        $result = Student::all();

        $json = json_encode($result);
        return $json;
    }
    public function get($id){
        $result = Student::find($id);

        $json = json_encode($result);
        return $json;
    }

    public function all_where($condition, $condition2 = null){

        $condition = explode('&', $condition);
        $condition[2] = str_replace('+', ' ', $condition[2]);
        if(isset($condition2)){
            $condition2 = explode('&', $condition2);
            $condition2[2] = str_replace('+', ' ', $condition2[2]);
            $result = Student::all()
                ->where($condition[0], $condition[1], $condition[2])
                ->where($condition2[0], $condition2[1], $condition2[2]);
        } else {
            $result = Student::all()
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
            $result = Student::all()
                ->where('id', '=', $id)
                ->where($condition[0], $condition[1], $condition[2])
                ->where($condition2[0], $condition2[1], $condition2[2]);
        } else {
            $result = Student::all()
                ->where('id', '=', $id)
                ->where($condition[0], $condition[1], $condition[2]);
        }

        $json = json_encode($result);
        return $json;
    }

    public function where($condition = null, $condition2 = null){
        if(isset($condition)){
            $condition = explode('&', $condition);
            $condition[2] = str_replace('+', ' ', $condition[2]);
            if(isset($condition2)){
                $condition2 = explode('&', $condition2);
                $condition2[2] = str_replace('+', ' ', $condition2[2]);
                $result = Student::all()
                    ->where($condition[0], $condition[1], $condition[2])
                    ->where($condition2[0], $condition2[1], $condition2[2]);
            } else {
                $result = Student::all()
                    ->where($condition[0], $condition[1], $condition[2]);
            }

            $json = json_encode($result);
            return $json;
        } else {
            return null;
        }
    }

}
