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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('release_year');
            $table->text('locations');
            $table->text('fun_facts');
            $table->string('production_company');
            $table->string('distributor');
            $table->string('director');
            $table->string('writer');
            $table->string('actor_1');
            $table->string('actor_2');
            $table->string('actor_3');
            $table->string('sf_find_neighborhoods');
            $table->string('analysis_neighborhoods');
            $table->string('current_supervisor_districts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
