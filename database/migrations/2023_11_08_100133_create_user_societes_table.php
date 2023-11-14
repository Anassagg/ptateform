<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_societe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pro_user_id');
            $table->unsignedBigInteger('societe_id');
            $table->timestamps();
            $table->foreign('pro_user_id')->references('id')->on('pro_users');
            $table->foreign('societe_id')->references('id')->on('societes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_societes');
    }
};
