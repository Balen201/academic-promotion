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
        Schema::create('xwendn_ones', function (Blueprint $table) {
            $table->id();
            $table->date('la');
            $table->date('takw');
            $table->string('brwanama');
            $table->string('pspor');
            $table->string('zanko');
            $table->string('wllat');
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
        Schema::dropIfExists('xwendn_ones');
    }
};
