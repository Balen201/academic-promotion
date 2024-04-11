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
        Schema::create('person_detailves', function (Blueprint $table) {
            $table->id();
           $table->string('name');
           $table->string('college');
           $table->string('department');
           $table->integer('number');
           $table->string('address');
           $table->string('play_zansti');
           $table->string('play_dawakraw');
           $table->date('barwar');
           $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');






        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person_detailves');
    }
};
