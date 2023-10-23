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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('career', 70);
            $table->char('curriculum', 1);
            $table->string('educational_level', 40);
            $table->string('official_code', 15);
            $table->string('career_name', 70);
            $table->string('abbreviate_name');
            $table->smallInteger('maximum_load');
            $table->smallInteger('total_credits');
            $table->string('level', 25);
            $table->string('modality', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
