<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('mysql_database2')->create('testCases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id'); 
            $table->unsignedBigInteger('feature_id'); 
            // $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            // $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
            $table->text('received_message')->nullable();
            $table->string('type');
            $table->timestamps();
        });

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
   
        Schema::connection('mysql_database2')->dropIfExists('testCases');
    }
};
