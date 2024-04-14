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
        Schema::create('andams', function (Blueprint $table) {
            $table->id();
            $table->string('sandica');
            $table->string('zhmaray_nasnama');
            $table->string('barwari_andam');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');



            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('andams');
    }
};
