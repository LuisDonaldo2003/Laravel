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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('grade');
            $table->foreignId('period_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('activity_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('instructor_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('group_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('area_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('career_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('student_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
