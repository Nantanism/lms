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
    if (!Schema::hasColumn('courses', 'category')) {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('category')->nullable();
        });
    }
}


public function down(): void
{
    // Only drop if the column exists
    if (Schema::hasColumn('courses', 'category')) {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
}


};
