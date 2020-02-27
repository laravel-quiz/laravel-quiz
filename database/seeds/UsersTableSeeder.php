<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
            'name' => 'anil stha',
            'email' => 'aaneelstha3@gmail.com',
            'password' => Hash::make('aaneelskp1'),
            'role_id' => 1,
        ], [
            'name' => 'Rukesh Basukala',
            'email' => 'rukeshbasukala@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 2,
        ], [
            'name' => 'hams',
            'email' => 'imhamlet.hams@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 2,
        ], [
            'name' => 'sandesh sth',
            'email' => 'sandeshshrestha63@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3,
        ], [
            'name' => 'Roshan',
            'email' => 'roshanfreeacc@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3,
        ]
        ]);
    }
}
