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
        Schema::create('ticket_attachments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('TicketID');
            $table->foreign('TicketID')->references('id')->on('tickets')->onDelete('cascade');

            $table->foreignId('ReplyID')->nullable();
            $table->foreign('ReplyID')->references('id')->on('ticket_replies')->onDelete('cascade');

            $table->string('File');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_attachments');
    }
};
