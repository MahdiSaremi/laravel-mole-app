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
        Schema::create('user_profits', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('profit_id')->unsigned();
            $table->timestamp('created_at')->precision(0)->nullable();
            $table->timestamp('updated_at')->precision(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('user_profits');
    }
};
