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
        Schema::create('xwendn_ses', function (Blueprint $table) {
            $table->id();
            $table->date('la');
            $table->date('takw');
            $table->string('pisha');
            $table->string('shweni_kar');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');




          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xwendn_ses');
    }
};
