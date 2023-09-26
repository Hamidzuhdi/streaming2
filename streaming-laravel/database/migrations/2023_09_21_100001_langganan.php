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
        Schema::create('langganan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('tipe');
            $table->integer('harga');
            $table->date('durasi');
            $table->boolean('extends');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
