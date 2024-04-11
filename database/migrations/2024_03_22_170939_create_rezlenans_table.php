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
        Schema::create('rezlenans', function (Blueprint $table) {
            $table->id();
            $table->string('layani_supasdar');
            $table->string('zhmara');
            $table->date('barwari_farman');
            $table->string('hoysupas_pezanin');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');




            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rezlenans');
    }
};
