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
        Schema::create('user_auths', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image')->nullable();
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->string('confirm_password');
            $table->string('nid')->nullable();
            $table->text('birth_date')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('nickname')->nullable();
            $table->string('designation')->nullable();
            $table->string('website')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->text('address')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('googlePlus')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->longText('biographicalInfo')->nullable();
            $table->date('date')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_auths');
    }
};
