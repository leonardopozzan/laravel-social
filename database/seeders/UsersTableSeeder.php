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
        $admin = config('admin');
        foreach($admin as $person){
            $newUser = new User();
            $newUser->name= $person['name'];
            $newUser->email= $person['email'];
            $newUser->password= bcrypt($person['password']);
            $newUser->subscribed_at = today()->toDateString();;
            $newUser->role = 'admin';
            $newUser->save();
        }
    }
}
