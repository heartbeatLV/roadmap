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
        Schema::table('items', static function (Blueprint $table) : void {
            $table->boolean('pinned')->after('total_votes')->default(false);
        });
    }
};