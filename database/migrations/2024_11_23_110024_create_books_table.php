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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('publish');
            $table->integer('publish_year');
            $table->integer('publish_month');
            $table->integer('isbn')->nullable();
            $table->string('book_size');
            $table->date('purchase_date')->nullable();
            $table->string('status'); //現状
            $table->date('disposal_date')->nullable();
            $table->string('disposal_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
