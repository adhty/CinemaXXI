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
    Schema::create('movies', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->integer('duration');
        $table->string('age');
        $table->string('animation_type');
        $table->string('trailer')->nullable();
        $table->date('start_showing');
        $table->date('start_selling');
        $table->text('synopsis');
        $table->string('producer');
        $table->string('director');
        $table->string('writer');
        $table->string('production');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
