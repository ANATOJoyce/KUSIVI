<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class utilisateur_test extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin1234'),
                'type' => 2,
            ],
            [
                'name' => 'vendeur',
                'email' => 'vendeur@example.com',
                'password' => Hash::make('vendeur1234'),
                'type' => 0,
            ],

            [
                'name' => 'agriculteur',
                'email' => 'agriculteur@example.com',
                'password' => Hash::make('agriculteur1234'),
                'type' => 1,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
