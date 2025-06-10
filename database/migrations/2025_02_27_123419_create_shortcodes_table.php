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
        Schema::create('shortcodes', function (Blueprint $table) {
            $table->id();
            $table->string('code_id');
            $table->string('title'); // Update to ensure title is varchar(255)
            $table->text('details'); // Add details column as text, nullable
            $table->string('sortcode'); // Add sortcode column
            $table->string('key')->nullable(); // Add key column
            $table->text('type')->nullable(); // Add type column
            $table->text('extra')->nullable(); // Add extra column
            $table->tinyInteger('status')->default(1); // Add status, default is active (1)
            $table->string('lang')->nullable(); // Add lang column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortcodes');
    }
};
