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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('paternal_last_name', 30);
            $table->string('maternal_last_name', 30);
            $table->string('email', 50);
            $table->string('phone', 15);
            $table->date('birthdate');
            $table->string('street');
            $table->string('exterior_number', 10);
            $table->string('interior_number', 10);
            $table->string('neighborhood', 30);
            $table->string('password');
            $table->char('status', 1);
            $table->integer('semester');
            $table->timestamps();

            $table->foreignId('town_id')->constrained('towns')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('career_id')->constrained('careers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('gender_id')->constrained('genders')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
