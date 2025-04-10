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
            $table->id();
            $table->foreignId("brand_id");
            $table->string("name");
            $table->string("price");
            $table->string("price_sign");
            $table->string("currency");
            $table->string("image_link");
            $table->string("desciption");
            $table->integer("rating");
            $table->foreignId("category_id");
            $table->foreignId("type_id");
            $table->string("tag_list");
            $table->string("created_at");
            $table->string("updated_at");
            $table->string("product_colors");
            $table->timestamps();
            $table->softDeletes();
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
