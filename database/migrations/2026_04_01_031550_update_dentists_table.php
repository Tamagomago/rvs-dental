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
        Schema::table('dentists', function (Blueprint $table) {
            $table->dropColumn('full_name');
            $table->string('first_name')->after('dentist_id');
            $table->string('last_name')->after('first_name');
            $table->string('specialization')->after('license_no');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dentists', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->string('full_name')->after('dentist_id');
            $table->dropColumn('specialization');
        });
    }
};
