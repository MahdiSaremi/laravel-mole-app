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
        Schema::table('profits', function (Blueprint $table) {
            $table->foreign('profit_tab_id', 'profits_profit_tab_id_foreign')->references('id')->on('profit_tabs')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profits', function (Blueprint $table) {
            $table->dropIndex('profits_profit_tab_id_foreign');
        });
    }
};
