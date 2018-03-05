<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservationlog')->insert([
            'res_number'=>'040320180001',
            'pc_name'=>'PC-1',
            'starttime'=> Carbon::now(),
            'endtime'=> Carbon::now(),
            'student'=>'Joshua Emmanuel',
            'active'=> '0'

        ]);

        DB::table('reservationlog')->insert([
            'res_number'=>'040320180213',
            'pc_name'=>'PC-2',
            'starttime'=> Carbon::now(),
            'endtime'=> Carbon::now(),
            'student'=>'Maria Angela Evangelista',
            'active'=>'0'
        ]);

        DB::table('reservationlog')->insert([
            'res_number'=>'0403201280213',
            'pc_name'=>'PC-32',
            'starttime'=> Carbon::now(),
            'endtime'=> Carbon::now(),
            'student'=>'Maria Angela Evangelista',
            'active'=>'0'
        ]);

        DB::table('reservationlog')->insert([
            'res_number'=>'0103201180213',
            'pc_name'=>'PC-21',
            'starttime'=> Carbon::now(),
            'endtime'=> Carbon::now(),
            'student'=>'Shania Castro Anderson',
            'active'=>'0'
        ]);

        DB::table('reservationlog')->insert([
        'res_number'=>'0103201180213',
        'pc_name'=>'PC-21',
        'starttime'=> Carbon::now(),
        'endtime'=> Carbon::now(),
        'student'=>'Shania Castro Anderson',
        'active'=>'0'
        ]);

        DB::table('reservationlog')->insert([
            'res_number'=>'03110180213',
            'pc_name'=>'PC-12',
            'starttime'=> Carbon::now(),
            'endtime'=> Carbon::now(),
            'student'=>'Nelvin Castro',
            'active'=>'0'
        ]);

        DB::table('reservationlog')->insert([
            'res_number'=>'123320180213',
            'pc_name'=>'PC-9',
            'starttime'=> Carbon::now(),
            'endtime'=> Carbon::now(),
            'student'=>'Aaron Viernes Galarido',
            'active'=>'0'
        ]);



    }
}
