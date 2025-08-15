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
        Schema::table('powerbi_users', function (Blueprint $table) {
                        $table->text('client_id')->nullable()->after('password'); // Add nullable client_id column

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('powerbi_users', function (Blueprint $table) {
             $table->dropColumn('client_id');

        });
    }
};
