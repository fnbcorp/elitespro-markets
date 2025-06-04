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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_profile_id')->constrained('account_profile')->cascadeOnDelete();
            $table->string('transaction_type', 10);
            $table->decimal('amount', 30, 2);
            $table->string('status', 20)->default('pending');
            $table->string('payment_mode');
            $table->string('currency');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('transaction');
        Schema::table('transaction', function (Blueprint $table) {
            //
            // drop currency column from account_profile table
            $table->dropColumn('currency');
        });
    }
};
