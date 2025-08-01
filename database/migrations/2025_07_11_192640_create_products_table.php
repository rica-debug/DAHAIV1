<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('slug')->unique();
    $table->text('description')->nullable();
    $table->decimal('price', 10, 2);
    $table->string('category'); // Módulos, Inversores, Baterías, Carga
    $table->string('image')->nullable();
    $table->timestamps();
});
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};