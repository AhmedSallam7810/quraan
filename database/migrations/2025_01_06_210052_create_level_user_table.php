<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration {

//     public function up(): void
//     {
//         Schema::create('level_user', function (Blueprint $table) {
//             $table->id();
//             $table->foreignIdFor(App\Models\User::class)
//                 ->constrained()
//                 ->cascadeOnDelete()
//                 ->cascadeOnUpdate();

//             $table->foreignIdFor(App\Models\Level::class)
//                 ->constrained()
//                 ->cascadeOnDelete()
//                 ->cascadeOnUpdate();

//             $table->timestamps();
//         });
//     }


//     public function down(): void
//     {
//         Schema::dropIfExists('level_user');
//     }
// };
