<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('quran_reading_user', function (Blueprint $table) {
//             $table->foreignIdFor(App\Models\QuranReading::class)
//                 ->constrained()
//                 ->restrictOnDelete()
//                 ->restrictOnUpdate();

//             $table->foreignIdFor(App\Models\User::class)
//                 ->constrained()
//                 ->cascadeOnDelete()
//                 ->cascadeOnUpdate();

//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('quran_reading_user');
//     }
// };
