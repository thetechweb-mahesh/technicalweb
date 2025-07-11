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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->mediumText('description');
            $table->string('image');

            $table->string('meta_title');
            $table->mediumText('meta_description')->nullable();;
            $table->mediumText('meta_keyword')->nullable();;
            $table->json('tags'); // Storing tags as JSON
            $table->tinyInteger('status')->default('0');
            // $table->enum('status', ['draft', 'published']);
            $table->Integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
