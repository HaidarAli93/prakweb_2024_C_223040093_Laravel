<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
		User::create(array(
			'name' => 'Haidar Ali',
			'username' => 'haidarali',
			'email' => 'haidar.223040093@mail.unpas.ac.id',
			'email_verified_at' => now(),
			'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
		));

		User::factory(5)->create();
    }
}
