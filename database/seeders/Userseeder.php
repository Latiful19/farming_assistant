<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create
        (
            [
                'Full_Name'=>'Admin',
                'User_Name'=>'AdmiN',
                'role'=>'admin',
                'Email'=>'admin@gmail.com',
                'password'=>bcrypt('123456'),
                'Mobile_No'=>'01703192196',
                'Address'=>'Uttara'
                

                

    
            ]);

    }
}
