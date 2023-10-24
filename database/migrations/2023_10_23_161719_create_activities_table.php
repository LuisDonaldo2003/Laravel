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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->text('objective');
            $table->text('competence');
            $table->text('syllabus');
            $table->enum('authorized',['yes','not'])->default('not');
            $table->integer('activity');
            $table->integer('credits');
            $table->foreignId('period_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('staff_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
