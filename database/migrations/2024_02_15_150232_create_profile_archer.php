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
        Schema::create('profile_archer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('federation')->nullable();
            $table->string('license_number')->nullable();
            $table->boolean('eye_director')->default(false);
            $table->string('elongate')->nullable();
            $table->string('name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->boolean('arrow_passage_white')->default(false);
            $table->boolean('arrow_passage_black')->default(false);
            $table->boolean('arrow_passage_blue')->default(false);
            $table->boolean('arrow_passage_red')->default(false);
            $table->boolean('arrow_passage_yellow')->default(false);
            $table->boolean('feather_passage_white')->default(false);
            $table->boolean('feather_passage_black')->default(false);
            $table->boolean('feather_passage_blue')->default(false);
            $table->boolean('feather_passage_red')->default(false);
            $table->boolean('feather_passage_yellow')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_archer');
    }
};
