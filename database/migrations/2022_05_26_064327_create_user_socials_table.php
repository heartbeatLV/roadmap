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
        Schema::create('user_socials', static function (Blueprint $table) : void {
            $table->id();

            $table->string('name')->nullable();
            $table->string('provider')->nullable()->default('sso');
            $table->string('provider_id')->nullable();
            $table->text('access_token')->nullable();
            $table->text('refresh_token')->nullable();

            $table->foreignId('user_id')->nullable()->constrained();
            $table->timestamps();
        });

        Schema::table('users', static function (Blueprint $table) : void {
            $table->string('password')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void {
        Schema::dropIfExists('user_socials');
    }
};
