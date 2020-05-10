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
      $user =  User::create([
            'name'       => 'Admin',
            'email'      => 'admin@gmail.com',
            'password'   => bcrypt('1234567890'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
