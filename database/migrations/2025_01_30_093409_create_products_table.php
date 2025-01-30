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
            $table->string("title");
            $table->text("content");
            $table->decimal("price", 10, 2);
            $table->decimal("off", 10, 2)->default(0);
            $table->integer("stock")->default(0);
            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("admins")->onDelete("cascade");
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
