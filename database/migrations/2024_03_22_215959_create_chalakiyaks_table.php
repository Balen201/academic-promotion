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
        Schema::create('chalakiyaks', function (Blueprint $table) {
            $table->id();
            $table->string('lizhnay_post');
            $table->string('zhmara');
            $table->date('barwar');
            $table->date('maway_lizhna');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');




          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chalakiyaks');
    }
};
