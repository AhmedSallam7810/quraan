<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('quran_permissions', function (Blueprint $table) {
//             $table->id();
//             $table->string('name');
//             $table->string('front_image');
//             $table->string('back_image');
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
//         Schema::dropIfExists('quran_permissions');
//     }
// };
