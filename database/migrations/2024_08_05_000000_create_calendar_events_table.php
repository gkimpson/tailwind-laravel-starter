<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('calendar_events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->string('color')->default('#2563eb');
            $table->boolean('is_all_day')->default(false);
            $table->string('timezone')->default('UTC');
            $table->timestamp('starts_at');
            $table->timestamp('ends_at')->nullable();
            $table->string('rrule')->nullable();
            $table->timestamp('recurrence_ends_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('calendar_events');
    }
};
