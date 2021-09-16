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
                'id'=>'1',
                'Full_Name'=>'Admin',
                'User_Name'=>'Leon',
                'role'=>'admin',
                'Email'=>'leon568@gmail.com',
                'password'=>bcrypt('123456'),
                'Mobile_No'=>'01703192196',
                'Address'=>'Uttara',
                

    
            ]);

    }
}
