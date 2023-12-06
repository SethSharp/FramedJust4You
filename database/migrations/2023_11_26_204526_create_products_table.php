<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            $table->timestamps();
        });
    }
};
