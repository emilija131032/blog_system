<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [ 'name' => 'Emilija',
                'email' => 'enacova@gmail.com',
                'password' => bcrypt('secret')
            ],
            [ 'name' => 'Mary',
                'email' => 'marya@gmail.com',
                'password' => bcrypt('secret')
            ],

        ];
        DB::table('users')->insert($users);
    }
}
