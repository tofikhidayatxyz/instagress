<?php

use Illuminate\Database\Seeder;
use App\AdminMail;

class AdminMailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminMail::create([
            'name' => 'admin 1',
            'email' => 'admin1@test.app'
        ]);
        AdminMail::create([
            'name' => 'admin 2',
            'email' => 'admin2@test.app'
        ]);
        AdminMail::create([
            'name' => 'admin 3',
            'email' => 'admin3@test.app'
        ]);
    }
}
