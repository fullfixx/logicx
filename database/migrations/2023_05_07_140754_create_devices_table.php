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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type_name');
            $table->string('class_name')->nullable();
            $table->string('brand_name');
            $table->string('model_name');
            $table->string('wh_value')->nullable();
            $table->string('volt_value')->nullable();
            $table->string('version_name')->nullable();
            $table->string('color_name')->nullable();
            $table->string('addition_1')->nullable();
            $table->string('addition_2')->nullable();
            $table->string('addition_3')->nullable();
            $table->string('remark')->nullable();
            $table->boolean('visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
