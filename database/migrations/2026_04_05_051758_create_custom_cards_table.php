<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('custom_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('custom_page_id')->constrained('custom_pages')->cascadeOnDelete();
            $table->string('name', 150);
            $table->string('image_url', 500)->nullable();
            $table->string('image_path', 500)->nullable();
            $table->string('url', 500);
            $table->boolean('new_tab')->default(true);
            $table->unsignedSmallInteger('order_no')->default(0);
            $table->timestamps();

            $table->index(['custom_page_id', 'order_no']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('custom_cards');
    }
};
