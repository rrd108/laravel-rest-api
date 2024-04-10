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
        Schema::create('products', function (Blueprint $table) {
            $table->smallInteger('id')->unsigned()->autoIncrement();
            $table->string('category', 255)->notNull();
            $table->string('name', 255)->notNull();
            $table->string('description', 255)->notNull();
            $table->string('picture', 255)->notNull();
            $table->mediumInteger('price')->notNull();
            $table->mediumInteger('stock')->notNull();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
