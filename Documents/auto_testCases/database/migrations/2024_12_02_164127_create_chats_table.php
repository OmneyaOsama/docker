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
        Schema::connection('mysql_database1')->create('chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('session_id'); 
            $table->text('send_msg');
            $table->text('receive_msg');
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_database1')->dropIfExists('chats');
    }
};
