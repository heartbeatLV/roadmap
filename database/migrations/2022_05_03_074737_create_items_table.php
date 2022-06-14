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
        Schema::create('items', static function (Blueprint $table) : void {
            $table->id();

            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->unsignedInteger('votes')->nullable()->default(0);

            $table->foreignId('board_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void {
        Schema::dropIfExists('items');
    }
};
