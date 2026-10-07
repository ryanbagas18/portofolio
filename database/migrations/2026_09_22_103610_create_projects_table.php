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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('company')->nullable();
            $table->string('role')->nullable();
            $table->text('description');
            $table->text('meta_description')->nullable();
            $table->string('image_path')->nullable();
            $table->string('github_url')->nullable();
            $table->string('demo_url')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('is_published')->default(true);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
