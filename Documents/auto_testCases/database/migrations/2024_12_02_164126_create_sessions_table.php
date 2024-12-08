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
        Schema::connection('mysql_database1')->create('sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feature_id');
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_database1')->dropIfExists('sessions');
    }
};
