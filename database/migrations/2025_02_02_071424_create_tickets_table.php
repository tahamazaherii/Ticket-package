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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('UserID');
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');

            $table->foreignId('OfficerID')->nullable();
            $table->foreign('OfficerID')->references('id')->on('users')->onDelete('cascade');

            $table->foreignId('CategoryID');
            $table->foreign('CategoryID')->references('id')->on('categories')->onDelete('cascade');


            $table->unsignedBigInteger('ReplyID')->nullable();
            $table->string('Title');
            $table->text('Description');
            $table->enum('Status', ['open', 'seen', 'reply', 'userReply', 'closed'])->default('open');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
