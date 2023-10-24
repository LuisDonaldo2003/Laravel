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
            $table->string("name", 200);
            $table->string("lastname", 200);
            $table->string("email", 200);
            $table->string("telephone", 20);
            $table->date("birthdate");
            $table->string("gender", 15)->nullable();
            $table->string("street", 50)->nullable();
            $table->integer("exterior_number");
            $table->integer("interior_number");
            $table->string("suburb")->nullable();
            $table->char("status", 1)->nullable();
            $table->integer("semester")->nullable();
            $table->timestamps();
            $table->foreignId('town_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('role_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('career_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('gender_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
