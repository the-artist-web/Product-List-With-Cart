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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->decimal("total", 10, 2);
            $table->integer("quantity")->default(0);
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("order_id");
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->foreign("order_id")->references("id")->on("orders")->onDelete("cascade");
            $table->timestamps();

            $table->unique(["product_id", "order_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
