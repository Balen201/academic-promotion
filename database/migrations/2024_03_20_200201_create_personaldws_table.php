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
        Schema::create('personaldws', function (Blueprint $table) {
            $table->id();
            $table->string('pspori_gshti');
            $table->string('pspori_wrd');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');



            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personaldws');
    }
};
