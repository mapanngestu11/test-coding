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
        Schema::table('ktps', function (Blueprint $table) {
            $table->string('no_kk')->nullable(); // Menambahkan kolom no_kk
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable(); // Menambahkan kolom jenis_kelamin
            $table->string('agama')->nullable(); // Menambahkan kolom agama
            $table->string('pekerjaan')->nullable(); // Menambahkan kolom pekerjaan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ktps', function (Blueprint $table) {
            //
        });
    }
};
