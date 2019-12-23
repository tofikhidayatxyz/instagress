<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'description' => 'For administrator'
        ]);
        Role::create([
            'name' => 'user',
            'description' => 'For normal user'
        ]);
    }
}
