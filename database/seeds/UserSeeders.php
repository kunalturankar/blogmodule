<?php

use Illuminate\Database\Seeder;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=> 'Hiren Dave',
                'email'=> 'hiren@laracon.in',
                'password'=> bcrypt('password'),
                'created_at'=>'2020-03-29 11:00:00'
            ],
            [
                'name'=> 'Akram Chauhan',
                'email'=> 'akram@laracon.in',
                'password'=> bcrypt('password'),
                'created_at'=>'2020-03-29 11:00:00'
            ],
            [
                'name'=> 'Chirag Shah',
                'email'=> 'chirag@laracon.in',
                'password'=> bcrypt('password'),
                'created_at'=>'2020-03-29 11:00:00'
            ],
            [
                'name'=> 'Vishal Rajpurohit',
                'email'=> 'vishal@laracon.in',
                'password'=> bcrypt('password'),
                'created_at'=>'2020-03-29 11:00:00'
            ],
            [
                'name'=> 'Bhavesh Daswani',
                'email'=> 'bhavesh@laracon.in',
                'password'=> bcrypt('password'),
                'created_at'=>'2020-03-29 11:00:00'
            ],
            [
                'name'=> 'Bhavdip Pambhar',
                'email'=> 'bhavdip@laracon.in',
                'password'=> bcrypt('password'),
                'created_at'=>'2020-03-29 11:00:00'
            ],
            [
                'name'=> 'Murtaza Bharmal',
                'email'=> 'murtaza@laracon.in',
                'password'=> bcrypt('password'),
                'created_at'=>'2020-03-29 11:00:00'
            ],
        ]);
    }
}
