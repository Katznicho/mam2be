<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new \App\Models\User();
        $admin->name = 'Gabula Stephen';
        $admin->email = 'steven@gmail.com';
        $admin->password = bcrypt('password');
        $admin->role = 'admin';
        $admin->phone = '0700000000';
        $admin->role_id = 1;
        $admin->save();


    }
}
