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
            $table->string('sort_items_by')
                ->nullable()
                ->after('description')
                ->default(\App\Models\Board::SORT_ITEMS_BY_POPULAR);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void {
        Schema::table('boards', static function (Blueprint $table) : void {
            $table->dropColumn('sort_items_by');
        });
    }
};
