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
        Schema::table('candidate_clients', function (Blueprint $table) {
            $table->boolean('is_processed')->default(false);
            $table->dateTime('date_processed')->nullable();
            $table->text('phonenumber');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('candidate_clients', function (Blueprint $table) {
            $table->dropColumn('is_processed');
            $table->dropColumn('date_processed');
            $table->dropColumn('phonenumber');
        });
    }
};
