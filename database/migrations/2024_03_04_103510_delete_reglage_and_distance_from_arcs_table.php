<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::table('arcs', function (Blueprint $table) {
            $table->dropColumn('viseur_distance');
            $table->dropColumn('viseur_reglage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('arcs', function (Blueprint $table) {
            $table->unsignedInteger('viseur_distance')->nullable();
            $table->integer('viseur_reglage')->nullable();
        });
    }
};
