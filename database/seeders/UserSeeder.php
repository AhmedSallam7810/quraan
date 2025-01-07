<?php

namespace Database\Seeders;

use App\Models\QuranReading;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        $quranReading = QuranReading::all();

        foreach ($users as $user) {
            $count = rand(1, $quranReading->count());

            $user->quranReadings()->attach($quranReading->random($count));
        }
    }
}
