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
        Schema::table('table_shopinglist_items', function (Blueprint $table) {
            // $table->decimal('price',total: 10,places: 2);
            $table->decimal('quantity',total: 10,places: 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shopinglist_items', function (Blueprint $table) {
            //
        });
    }
};
