<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up() : void {
        Schema::table('items', static function (Blueprint $table) : void {
            $table->integer('project_id')->after('total_votes')->nullable();
        });
    }

    public function down() : void {
        Schema::table('items', static function (Blueprint $table) : void {
            $table->dropColumn('project_id');
        });
    }
};
