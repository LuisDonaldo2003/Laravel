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
            $table->string('name', 20);
            $table->text('general_objective');
            $table->text('competence');
            $table->text('syllabus');
            $table->char('authorized', 1);
            $table->integer('credits');
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('period_id')->constrained('periods')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('staff_id')->constrained('staff')->onDelete('cascade')->onUpdate('cascade');

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
