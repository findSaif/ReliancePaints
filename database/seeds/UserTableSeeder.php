<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\user([
        	'role_id' => 1, 
        	'is_active' => 1,
        	'name' => 'Saif',
        	'email' => 'saif@gmail.com',
        	'password' => bcrypt('abc123+'),
        ]);
        
        $user->save();
    }
}
