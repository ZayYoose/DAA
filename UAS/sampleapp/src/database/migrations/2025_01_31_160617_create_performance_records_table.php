<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('performance_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('athlete_id')->constrained()->onDelete('cascade');
            $table->date('record_date');
            $table->string('swimming_style'); // Gaya renang: Bebas, Dada, Punggung, dll.
            $table->integer('distance'); // Jarak dalam meter
            $table->time('time_result'); // Waktu tempuh
            $table->integer('heart_rate'); // Detak jantung
            $table->float('vo2_max'); // VO2 Max atlet
            $table->text('coach_notes')->nullable(); // Catatan pelatih
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('performance_records');
    }
};
