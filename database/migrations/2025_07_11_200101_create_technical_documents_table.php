<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('technical_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('file_path');
            $table->enum('type', ['manual', 'datasheet', 'certificate', 'warranty']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('technical_documents');
    }
};