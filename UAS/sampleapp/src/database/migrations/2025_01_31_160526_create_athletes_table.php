<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->float('height'); // dalam cm
            $table->float('weight'); // dalam kg
            $table->enum('training_level', ['Beginner', 'Intermediate', 'Advanced']);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('athletes');
    }
};
