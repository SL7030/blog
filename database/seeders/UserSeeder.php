<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
        $user = new User();
        $user->name = 'Sindy Cano';
        $user->email = 'sindy714@hotmail.com';
        $user->password = bcrypt('NENA7030');

        $user->save();

        User::factory(10)->create();

        }
    }
}
