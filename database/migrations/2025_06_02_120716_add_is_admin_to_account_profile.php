<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('account_profile', function (Blueprint $table) {
            // add is_admin column to account_profile table
            $table->boolean('is_admin')->default(false)->after('user_id')->comment('Indicates if the account profile is an admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('account_profile', function (Blueprint $table) {
            //
            // drop is_admin column from account_profile table
            $table->dropColumn('is_admin');
        });
    }
};
