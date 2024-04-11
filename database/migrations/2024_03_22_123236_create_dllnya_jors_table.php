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
        Schema::create('dllnya_jors', function (Blueprint $table) {
            $table->id();
            $table -> string('sall');
            $table -> string('hagbay_mamosta');
            $table -> string('zanstxwazi_bardawam');
            $table -> string('daranjami_gshti');
            $table -> string('feedback_qutabi');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');

          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dllnya_jors');
    }
};
