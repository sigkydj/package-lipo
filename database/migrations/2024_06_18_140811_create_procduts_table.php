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
        Schema::create('procduts', function (Blueprint $table) {
            $table->id();
            $table->string('fruta');
            $table->string('fruta_codigo');
            $table->string('fruta_precio');
            $table->string('fruta_cantidad');
            $table->string('fruta_impuesto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procduts');
    }
};
