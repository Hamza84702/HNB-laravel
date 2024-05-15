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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned();
            $table->biginteger('product_id')->unsigned();
            $table->integer('qty');
            $table->foreign('user_id')->references('id')->on('users')->onupdate('cascade')->ondelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onupdate('cascade')->ondelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
