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
        Schema::create('tooth_numbering', function (Blueprint $table) {
            $table->tinyInteger('tooth_id')->unsigned();
            $table->enum('type', ['Permanent', 'Temporary']);
            $table->enum('quadrant', ['Upper Right', 'Upper Left', 'Lower Right', 'Lower Left']);
            $table->tinyInteger('position')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tooth_numbering');
    }
};
