<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up() : void {
        Schema::table('items', static function (Blueprint $table) : void {
            $table->renameColumn('votes', 'total_votes');
        });
    }

    public function down() : void {
        Schema::table('items', static function (Blueprint $table) : void {
            $table->renameColumn('total_votes', 'votes');
        });
    }
};
