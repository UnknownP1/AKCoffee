<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'owner@akcoffee.test',
            ],
            [
                'name' => 'AK Coffee Owner',
                'password' => Hash::make('Owner12345'),
                'role' => 'owner',
            ]
        );
    }
}