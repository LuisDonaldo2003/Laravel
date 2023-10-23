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
        Schema::table('users', function (Blueprint $table) {
            $table->string('paternal_last_name', 30)->nullable();
            $table->string('maternal_last_name', 30)->nullable();
            $table->integer('state')->nullable();
            $table->foreignId('role_id')->nullable()->constrained('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('staff_id')->nullable()->constrained('staff')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
