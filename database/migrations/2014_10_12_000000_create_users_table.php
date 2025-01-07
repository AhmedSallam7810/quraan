<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth_date');
            $table->string('nationality');
            $table->string('residence_state');
            $table->string('residence_governorate');
            $table->string('educational_qualification');
            $table->string('phone');
            $table->string('alternative_phone')->nullable();
            $table->string('alternative_phone_owner')->nullable();
            $table->string('telegram_id');
            $table->string('telegram_name');
            $table->tinyInteger('quantity_of_quran');
            $table->string('job')->nullable();
            $table->enum('marital_status', ['married', 'divorced ', 'widowed', 'single'])->nullable();
            $table->string('password');
//            $table->rememberToken();
            $table->timestamps();
        });

//        Schema::create('password_reset_tokens', function (Blueprint $table) {
//            $table->string('email')->primary();
//            $table->string('token');
//            $table->timestamp('created_at')->nullable();
//        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
//        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
