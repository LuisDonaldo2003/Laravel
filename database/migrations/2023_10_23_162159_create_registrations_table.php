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
            $table->foreignId('period_id')->constrained('periods')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('activity_id')->constrained('activities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('instructor_id')->constrained('instructors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('group_id')->constrained('groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('area_id')->constrained('areas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('grade');
            $table->foreignId('career_id')->constrained('careers')->onDelete('cascade')->onUpdate('cascade');
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
