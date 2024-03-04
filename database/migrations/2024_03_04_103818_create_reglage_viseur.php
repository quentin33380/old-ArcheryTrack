<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reglage_viseur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('arc_id');
            $table->foreign('arc_id')->references('id')->on('arcs')->onDelete('cascade');
            $table->integer('distance');
            $table->decimal('reglage', 2,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reglage_viseur');
    }
};
