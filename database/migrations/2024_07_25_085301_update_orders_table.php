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
        Schema::table('orders',function (Blueprint $table) {
            $table->string('address')->after('user_id');
            $table->string('name_user')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders',function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('name_user');
        });
    }
};
