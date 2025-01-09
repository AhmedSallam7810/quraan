<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            [
                'name' => 'المستوى الأول',
                'description' => 'العشر الأخير',
            ],
            [
                'name' => 'المستوى الثاني',
                'description' => 'من الأحقاف حتى المجادلة',
            ]
        ];

        foreach ($levels as $level) {
            Level::create([
                'name' => $level['name'],
                'description' => $level['description'],
            ]);
        }
    }
}
