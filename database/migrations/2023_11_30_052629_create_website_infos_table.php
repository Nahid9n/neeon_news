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
        Schema::create('website_infos', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('email_other')->nullable();
            $table->string('address')->nullable();
            $table->text('map')->nullable();
            $table->integer('mobile_number')->nullable();
            $table->integer('mobile_optional')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('youtube')->nullable();
            $table->text('logo')->nullable();
            $table->text('banner')->nullable();
            $table->longText('about_us')->nullable();
            $table->text('short_about_us')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_infos');
    }
};
