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
        Schema::create('email_label_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mail_id')->constrained('emails')->onDelete('cascade');
            $table->foreignId('label_id')->constrained('email_labels')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_label_assignments');
    }
};
