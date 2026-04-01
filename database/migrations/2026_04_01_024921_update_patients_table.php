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
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('full_name');
            $table->string('first_name')->after('patient_id');
            $table->string('last_name')->after('first_name');
            $table->enum('sex', ['Male', 'Female'])->change();
            $table->enum('marital_status', ['Single', 'Married', 'Widowed', 'Separated'])->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->string('full_name')->after('patient_id');
            $table->string('sex')->change();
            $table->string('marital_status')->change();
        });
    }
};
