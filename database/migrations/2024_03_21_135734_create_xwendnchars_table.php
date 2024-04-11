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
        Schema::create('xwendnchars', function (Blueprint $table) {
            $table->id();
            $table->string('play_zansti');
            $table->date('barwari_wargrtn');
            $table->string('layani_plapedar');
            $table->string('farmani_zanko');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');



          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xwendnchars');



    }
};
