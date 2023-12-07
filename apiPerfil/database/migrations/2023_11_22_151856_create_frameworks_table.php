<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('frameworks', function (Blueprint $table) {
        $table->id();
        $table->foreignId('Profile_id')->constrained(); // Relación con el perfil
        $table->string('Name');
        $table->string('Level');
        $table->integer('Year');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frameworks');
    }
};
