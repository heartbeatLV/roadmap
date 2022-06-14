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
        Schema::table('projects', static function (Blueprint $table) : void {
            $table->string('slug')->after('id')->index()->nullable();
        });

        Schema::table('boards', static function (Blueprint $table) : void {
            $table->string('slug')->after('id')->index()->nullable();
        });

        Schema::table('items', static function (Blueprint $table) : void {
            $table->string('slug')->after('id')->index()->nullable();
        });

        \App\Models\Project::each(static fn (\App\Models\Project $project) => $project->update(['slug' => Str::slug($project->id . ' ' . $project->title)]));
        \App\Models\Board::each(static fn (\App\Models\Board $board) => $board->update(['slug' => Str::slug($board->id . ' ' . $board->title)]));
        \App\Models\Item::each(static fn (\App\Models\Item $item) => $item->update(['slug' => Str::slug($item->id . ' ' . $item->title)]));
    }
};
