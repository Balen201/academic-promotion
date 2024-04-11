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
        Schema::create('twezhinawa_yaks', function (Blueprint $table) {
            $table->id();
            $table->string('title_twezhinawa');
            $table->string('shweni_bllawkrdnawa');
            $table->date('kati_bllawkrdnawa');
            $table->string('play_zanstibo');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');

          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('twezhinawa_yaks');
    }
};
