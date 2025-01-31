<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('athlete_id')->constrained()->onDelete('cascade');
            $table->date('training_date'); // Tanggal latihan
            $table->string('training_level'); // Level latihan: Beginner, Intermediate, Advanced
            $table->string('training_type'); // Jenis latihan: Teknik, Ketahanan, Kecepatan, dll.
            $table->integer('duration'); // Durasi dalam menit
            $table->text('coach_notes')->nullable(); // Catatan pelatih
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('trainings');
    }
};
