<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = new User();
        $newUser->name= 'leonardo';
        $newUser->email= 'leonardo@leonardo.com';
        $newUser->password= bcrypt('leonardo');
        $newUser->subscribed_at = '2023-01-03';
        $newUser->role = 'admin';
        $newUser->save();
        $newUser = new User();
        $newUser->name= 'valentina';
        $newUser->email= 'valentina@valentina.com';
        $newUser->password= bcrypt('valentina');
        $newUser->subscribed_at = '2023-01-05';
        $newUser->role = 'customer';
        $newUser->save();
    }
}
