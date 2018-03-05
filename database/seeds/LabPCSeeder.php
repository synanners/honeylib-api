<?php

use Illuminate\Database\Seeder;

class LabPCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labpc')->insert([
            'pc_name'=>'labpc1-1',
            'ip_address'=>'192.168.221.222',
            'in_use'=>'0'
        ]);

        DB::table('labpc')->insert([
            'pc_name'=>'labpc10',
            'ip_address'=>'192.168.221.221',
            'in_use'=>'0'
        ]);

        DB::table('labpc')->insert([
            'pc_name'=>'labpc2',
            'ip_address'=>'192.168.221.221',
           'in_use'=>'0'
        ]);

        DB::table('labpc')->insert([
            'pc_name'=>'labpc3',
            'ip_address'=>'192.168.255.201',
            'in_use'=>'0'
        ]);

        DB::table('labpc')->insert([
            'pc_name'=>'labpc4',
            'ip_address'=>'192.168.221.211',
            'in_use'=>'0'
        ]);

        DB::table('labpc')->insert([
            'pc_name'=>'labpc5',
            'ip_address'=>'192.168.221.241',
           'in_use'=>'0'
        ]);

        DB::table('labpc')->insert([
            'pc_name'=>'labpc6',
            'ip_address'=>'192.168.221.201',
            'in_use'=>'0'
        ]);

        DB::table('labpc')->insert([
            'pc_name'=>'labpc7',
            'ip_address'=>'192.168.121.221',
            'in_use'=>'0'
        ]);

        DB::table('labpc')->insert([
            'pc_name'=>'labpc8',
            'ip_address'=>'192.168.100.101',
            'in_use'=>'0'
        ]);
    }
}
