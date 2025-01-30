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
        Schema::create('mediator_product_orders', function (Blueprint $table) {
            $table->id();
            $table->integer("count")->default(0);
            $table->decimal("total", 10, 2)->default(0);
            $table->unsignedBigInteger("order_id");
            $table->unsignedBigInteger("product_id");
            $table->foreign("order_id")->references("id")->on("orders")->onDelete("cascade");
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mediator_product_orders');
    }
};
