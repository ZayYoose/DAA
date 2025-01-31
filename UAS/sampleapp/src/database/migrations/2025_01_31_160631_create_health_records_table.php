<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('health_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('athlete_id')->constrained()->onDelete('cascade'); // Hubungan ke tabel atlet
            $table->string('blood_pressure'); // Tekanan darah (contoh: "120/80")
            $table->integer('heart_rate'); // Detak jantung (contoh: 72 BPM)
            $table->text('injury_history')->nullable(); // Riwayat cedera
            $table->text('recovery_plan')->nullable(); // Rencana pemulihan
            $table->text('nutrition_plan')->nullable(); // Rencana nutrisi
            $table->date('checkup_date'); // Tanggal pemeriksaan terakhir
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('health_records');
    }
};
