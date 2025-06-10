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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->Integer('category_id');
            $table->string('name');
            $table->string('slug');
            $table->mediumText('description');
            $table->string('image');
            $table->string('m_ser_title');
            $table->mediumText('m_ser_des');

            $table->string('ser_list_title');
            $table->mediumText('ser_list_des');

            $table->string('yt_ifranme')->nullable();

            $table->string('meta_title');
            $table->mediumText('meta_description')->nullable();;
            $table->mediumText('meta_keyword')->nullable();;

            $table->tinyInteger('status')->default('0');
            $table->Integer('created_by');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
