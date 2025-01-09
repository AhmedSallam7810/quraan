<?php

namespace Database\Seeders;

use App\Models\QuranReading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuranReadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $readings = [
            // نافع المدني
            'ورش عن نافع',
            'قالون عن نافع',

            // ابن كثير المكي
            'البزي عن ابن كثير',
            'قنبل عن ابن كثير',

            // أبو عمرو البصري
            'الدوري عن أبي عمرو',
            'السوسي عن أبي عمرو',

            // ابن عامر الشامي
            'هشام عن ابن عامر',
            'ابن ذكوان عن ابن عامر',

            // عاصم الكوفي
            'حفص عن عاصم',
            'شعبة عن عاصم',

            // حمزة الكوفي
            'خلاد عن حمزة',
            'خلف عن حمزة',

            // الكسائي الكوفي
            'الدوري عن الكسائي',
            'أبو الحارث عن الكسائي',

            // أبو جعفر المدني
            'ابن وردان عن أبي جعفر',
            'ابن جماز عن أبي جعفر',

            // يعقوب الحضرمي
            'روح عن يعقوب',
            'رويس عن يعقوب',

            // خلف العاشر
            'إدريس عن خلف',
            'إسحاق عن خلف',
        ];

        foreach ($readings as $reading) {
            QuranReading::create([
                'name' => $reading,
            ]);
        }
    }
}
