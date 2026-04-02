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
        Schema::table('dental_procedures', function (Blueprint $table) {
            $table->renameColumn('base_price', 'min_price');
            $table->text('notes')->nullable()->after('min_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dental_procedures', function (Blueprint $table) {
            $table->dropColumn('notes');
            $table->renameColumn('min_price', 'base_price');
        });
    }
};
