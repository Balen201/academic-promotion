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
        Schema::create('chalakidws', function (Blueprint $table) {
            $table->id();
            $table->string('brwanama');
            $table->string('nawi_qutabi');
            $table->string('zhmara');
            $table->date('barwar');
            $table->date('barwari_darchun');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');



           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chalakidws');
    }
};
