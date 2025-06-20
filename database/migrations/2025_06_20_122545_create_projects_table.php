<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->json('tech_stack');
            $table->string('image')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('github_url')->nullable();
            $table->json('features')->nullable();
            $table->enum('category', ['web', 'mobile', 'iot', 'ml', 'devops']);
            $table->boolean('featured')->default(false);
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};