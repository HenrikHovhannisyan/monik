<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name_am');
            $table->string('name_ru');
            $table->string('name_en');
            $table->text('description_am');
            $table->text('description_ru');
            $table->text('description_en');
            $table->string('price');
            $table->string('discount')->nullable();
            $table->json('images');
            $table->json('size');
            $table->json('gender');
            $table->string('color')->nullable();
            $table->string('quantity');
            $table->string('status');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
