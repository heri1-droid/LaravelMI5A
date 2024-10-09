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
        Schema::create('prodis', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('nama', 50);
            $table->string('kaprodi', 30);
            $table->string('singkatan', 5);
            $table->uuid('fakultas_id');
            $table->foreign('fakultas_id')->references('id')->on('fakultas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodis');
    }
};
