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
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'login');
        });


        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('retake_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->foreignId('city_id')->constrained();
            $table->string('adress');
            $table->string('size');
            $table->foreignId('type_id')->constrained();
            $table->foreignId('color_id')->constrained();
            $table->foreignId('retake_type_id')->constrained();
            $table->timestamp('created_at');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
        Schema::dropIfExists('types');
        Schema::dropIfExists('colors');
        Schema::dropIfExists('retake_types');
        Schema::dropIfExists('orders');
    }
};
