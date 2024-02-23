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
        Schema::create('arcs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name')->nullable();
            $table->enum('type', ['poulie', 'classique','nu', 'longbow', 'barbow', 'poulie-nu'])->nullable();
            $table->integer('puissance')->nullable();
            $table->string('viseur_marque')->nullable();
            $table->unsignedInteger('viseur_distance')->nullable();
            $table->integer('viseur_reglage')->nullable();
            $table->string('poignee_marque')->nullable();
            $table->integer('poignee_dimensions')->nullable();
            $table->string('branche_marque')->nullable();
            $table->integer('branche_dimensions')->nullable();
            $table->integer('band')->nullable();
            $table->integer('tiller')->nullable();
            $table->string('stab_marque')->nullable();
            $table->integer('stab_taille')->nullable();
            $table->integer('stab_nb_poids')->nullable();
            $table->integer('stab_poids')->nullable();
            $table->string('stab_laterales_marque')->nullable();
            $table->integer('stab_laterales_taille')->nullable();
            $table->integer('stab_laterales_nb_poids')->nullable();
            $table->integer('stab_laterales_poids')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arcs');
    }
};
