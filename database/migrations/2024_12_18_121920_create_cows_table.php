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
        Schema::create('cows', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tag_num');
            $table->date('birthday');
            $table->integer("sex");
            $table->integer("category");
            $table->foreignId('ranch_id')
                ->nullable()       // NULL許容にする
                ->constrained()
                ->nullOnDelete(); // ranch削除時、関連するcowのranch_idをNULLに設定
            $table->foreignId('cattle_barn_id')
                ->nullable()       // NULL許容にする
                ->constrained()
                ->nullOnDelete(); // cattle_barn削除時、関連するcowのcattle_barn_idをNULLに設定
            $table->foreignId('parent_cows_id')
                ->nullable()       // NULL許容にする
                ->constrained('parent_cows')
                ->nullOnDelete(); // parent削除時、関連するcowのparent_idをNULLに設定
            $table->foreignId('status_id')
                ->nullable()       // NULL許容にする
                ->constrained()
                ->nullOnDelete(); // status削除時、関連するcowのstatus_idをNULLに設定
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cows');
    }
};
