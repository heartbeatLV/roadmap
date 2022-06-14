<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void {
        Schema::create('boards', static function (Blueprint $table) : void {
            $table->id();

            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->boolean('can_users_create')->default(false);

            $table->foreignId('project_id')->nullable()->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void {
        Schema::dropIfExists('boards');
    }
};
