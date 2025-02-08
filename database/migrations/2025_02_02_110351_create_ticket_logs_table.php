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
        Schema::create('ticket_logs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('UserID');
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');

            $table->foreignId('TicketID');
            $table->foreign('TicketID')->references('id')->on('tickets')->onDelete('cascade');

            $table->enum('Action', ['attach', 'reply', 'assign', 'create', 'end'])->default('create');

            $table->text('Description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_logs');
    }
};
