<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users');

        $user = new User();
        $user->username = "admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("admin123");
        $user->save();
    }
}
