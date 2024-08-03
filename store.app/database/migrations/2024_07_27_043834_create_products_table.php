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
            $table-> engine= "innoDB";
            // $table->foreign("Id")->references("categories")->on("products")->onDelete("categories");
            $table->foreign("CategoryId")->references("categories")->on("products")->onDelete("categories");
            $table->string('ProductId')->primary();
            $table->string('CategorytId')->primary();
            $table->string('ProductName' , 30);
            $table->string('ProductDescription' , 30);
            $table->string('ProductImage', 500)->nullable();
            $table->string('ProductQuantity' , 30);
            $table->string('ProductPrice' , 30);
            $table->string('ProductStatus');
            $table->timestamps();
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
