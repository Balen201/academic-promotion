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
        Schema::create('twezhinaw_dws', function (Blueprint $table) {
            $table->id();
            $table->string('title_twezhinawa');
            $table->string('shwen');
            $table->date('kati_bllawkrdnawa');
            $table->string('facter');
            $table->string('index_internet');
            $table->string('wargirawa');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');



            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('twezhinaw_dws');
    }
};
