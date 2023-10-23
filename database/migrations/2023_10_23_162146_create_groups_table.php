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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('group_name');
            $table->integer('capacity');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();

            $table->foreignId('instructor_id')->constrained('instructors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('area_id')->constrained('areas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('activity_id')->constrained('activities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('period_id')->constrained('periods')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
