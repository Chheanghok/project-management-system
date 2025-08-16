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
        Schema::table('repayment_schedules', function (Blueprint $table) {
            $table->decimal('penalty_amount', 15, 2)->default(0)->after('remaining_balance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('repayment_schedules', function (Blueprint $table) {
            $table->dropColumn('penalty_amount');
        });
    }
};
