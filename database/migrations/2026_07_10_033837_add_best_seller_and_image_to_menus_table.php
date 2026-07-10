<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->string('image')->nullable()->after('status'); // Kolom gambar
            $table->boolean('is_best_seller')->default(false)->after('image'); // Ceklis terlaris
            $table->integer('best_seller_order')->nullable()->after('is_best_seller'); // Urutan 1-4
        });
    }

    public function down(): void
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn(['image', 'is_best_seller', 'best_seller_order']);
        });
    }
};