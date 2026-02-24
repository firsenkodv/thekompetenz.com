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
        Schema::create('insights', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('subtitle')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('back')->nullable();
            $table->string('slogan')->nullable();
            $table->string('img')->nullable();
            $table->text('desc')->nullable();
            $table->text('desc2')->nullable();
            $table->string('img2')->nullable();
            $table->text('params')->nullable();
            $table->text('gallery')->nullable();
            $table->tinyInteger('published')->default(1);
            $table->integer('sorting')->default(999);
            $table->tinyInteger('form')->default('0');
            $table->text('files')->nullable();
            $table->string('faq_title')->nullable();
            $table->longText('faq')->nullable();
            $table->string('metatitle')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insights');
    }
};
