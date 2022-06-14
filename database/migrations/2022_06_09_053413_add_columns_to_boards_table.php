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
        Schema::table('boards', static function (Blueprint $table) : void {
            $table->after('can_users_create', static function ($table) : void {
                $table->boolean('block_comments')->default(false);
                $table->boolean('block_votes')->default(false);
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void {
        Schema::table('boards', static function (Blueprint $table) : void {
            //
        });
    }
};
