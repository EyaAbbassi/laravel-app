<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
                'fname'=>'Eya',
                'lname'=>'Abbassi',
                'email'=>'Eya.abbassi@yahoo.com',
                'number'=>'+21694824861',
                'adress'=>'skaness, Monastir',
                'city'=>'Tunisia',
                'type'=>'coffee',
                'photo'=>'photo.jpg',              
                'desc'=>'small coffee shop',
                'password'=>Hash::make('123456')
            ]
            );
    }
}
