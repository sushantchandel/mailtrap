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
        Schema::create('email_actions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mail_id')->constrained('emails')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->boolean('is_sent')->default(false);
            $table->boolean('is_read')->default(false);
            $table->boolean('is_important')->default(false);
            $table->boolean('is_starred')->default(false);
            $table->boolean('is_archive')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_actions');
    }
};
