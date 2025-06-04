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
        Schema::create('account_balance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_profile_id')->constrained('account_profile')->cascadeOnDelete();
            $table->decimal('profit_loss', 30, 2)->default(0.00);
            $table->decimal('total_balance', 30, 2)->default(0.00);
            $table->decimal('total_bonus', 30, 2)->default(0.00);
            $table->decimal('total_profit', 30, 2)->default(0.00);
            $table->string('currency')->default('$');
            $table->decimal('deposit', 30, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_balance');
    }
};
