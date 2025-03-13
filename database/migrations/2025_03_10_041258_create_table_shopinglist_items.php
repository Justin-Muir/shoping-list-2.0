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
        Schema::create('shopinglist_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('shopinglist_name');
            $table->string('item_name');
            $table->boolean('plus_gct')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_shopinglist_items');
    }
};
