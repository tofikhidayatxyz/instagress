<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use App\Role;

class UserTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::where('name', 'admin')->first();
        $roleUser = Role::where('name', 'user')->first();

        $admin = new user();
        $admin->name = 'admin';
        $admin->email = 'admin@test.app';
        $admin->password =  bcrypt('secret');
        $admin->email_verified_at = Carbon::now();
        $admin->save();
        $admin->roles()->attach($roleAdmin);

        $user = new user();
        $user->name = 'tofikhidayatxyz';
        $user->email = 'user@test.app';
        $user->password =  bcrypt('secret');
        $user->email_verified_at = Carbon::now();
        $user->save();
        $user->roles()->attach($roleUser);
    }
}
