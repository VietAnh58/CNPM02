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
        Schema::create('menu_tops', function (Blueprint $table) {
            $table->bigIncrements('MenuId');
            $table->string('Title');
            $table->string('Alias');
            $table->string('Description');
            $table->string('Positiob');
            $table->timestamp('CreateDate');
            $table->binary('IsActive');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_tops');
    }
};
