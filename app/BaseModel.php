<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\User as Authenticatable;

class BaseModel extends Authenticatable{

    public static function saveData($data){
        try {
          
            //dd($data);
            $query = static::getInstance($data);
            echo json_encode($data)."<br/>";
            //dd($query);

            $ctr = 0;
            foreach ($query->fillable as $column){
                $query[$column] = $data[$ctr];
                $ctr++;
            }

            //dd($query);
            //$query->fill($data);
            $query->save();
           
            if($query->save()){

                return array(
                    'id'        => $query->id,
                    'status'    => 'success',
                    'messages'  => 'Saved Successfully!',
                    'code'      => 200
                );

            }else{

                return array(
                    'id'        => 0,
                    'status'    => 'error',
                    't'         => 'An Error has occured!',
                    'messages'  => 'Please contact iOrthotic support. 1',
                    'code'      => 400
                );

            }

        } catch (\Exception $e){

            return ( array(
                'id'        => 0,
                'status'    => 'error',
                't'         => 'An Error has occured!',
                'messages'=> $e->getMessage(),
                'code'      => 400
            ));
        }
    }

    public static function editData($data){

        try {
            $query = static::getInstance($data);
            echo json_encode($data)."<br/>";
            //dd($query);

            if($query->primaryKey == 'id'){

                $ctr = 0;
                foreach ($query->fillable as $column){
                    $query[$column] = $data[$ctr];
                    $ctr++;
                }

            } else {

                for ($ctr = 0, $i = 1; $ctr < sizeof($data) and $i < sizeof($query->fillable); $ctr++, $i++){
                    echo $i." ".$query->fillable[$i]." => ".$data[$ctr]."<br/>";
                    $query[$query->fillable[$i]] = $data[$ctr];
                }
            }

            /*$ctr = 0;
            foreach ($query->fillable as $column){
                if ($query->primaryKey !== 'id')
                    continue;
                $query[$column] = $data[$ctr];
                $ctr++;
            }*/

            //$query->fill($data);

            //dd($query);
            $query->save();

            if($query->save()){

                return array(
                    'id'        => $query->id,
                    'status'    => 'success',
                    'messages'  => 'Saved Successfully!',
                    'code'      => 200
                );

            }else{

                return array(
                    'id'        => 0,
                    'status'    => 'error',
                    't'         => 'An Error has occured!',
                    'messages'  => 'Please contact iOrthotic support. 1',
                    'code'      => 400
                );

            }

        } catch (\Exception $e){

            return ( array(
                'id'        => 0,
                'status'    => 'error',
                't'         => 'An Error has occured!',
                'messages'=> $e->getMessage(),
                'code'      => 400
            ));
        }
    }

}