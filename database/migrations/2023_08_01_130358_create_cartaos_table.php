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
        Schema::create('cartaos', function (Blueprint $table) {
            $table->id();
            $table->longText('caminho');
            $table->string('name');
            $table->foreignIdFor(\App\Models\Categoria::class);
            $table->boolean('customizavel')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartaos');
    }
};
