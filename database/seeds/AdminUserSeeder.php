<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Supplier',
            'email' => 'admin@agricola.com',
            'password' => bcrypt('admin123'),
        ]);

        $user->assignRole('admin');
        return $user;
    }
}
