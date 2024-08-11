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
        Schema::table('user_profits', function (Blueprint $table) {
            $table->foreign('user_id', 'user_profits_user_id_foreign')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('profit_id', 'user_profits_profit_id_foreign')->references('id')->on('profits')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_profits', function (Blueprint $table) {
            $table->dropIndex('user_profits_profit_id_foreign');
            $table->dropIndex('user_profits_user_id_foreign');
        });
    }
};
