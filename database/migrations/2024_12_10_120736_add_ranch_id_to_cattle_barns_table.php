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
        Schema::table('cattle_barns', function (Blueprint $table) {
            // ranch_id カラムを追加し、ranches テーブルの id と紐付け
            $table->foreignId('ranch_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cattle_barns', function (Blueprint $table) {
            // ranch_id カラムと外部キー制約を削除
            $table->dropForeign(['ranch_id']);
            $table->dropColumn('ranch_id');
        });
    }
};
