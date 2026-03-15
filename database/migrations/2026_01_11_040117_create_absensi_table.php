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
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id') // FIELD user_id
            ->constrained('users') // FK ke users.id
            ->onDelete('cascade'); // jika user dihapus

            $table->string('gambar')->nullable();
            $table->string('name');
            $table->string('kelas');
            $table->string('status');
            $table->string('pesan')->nullable();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};
