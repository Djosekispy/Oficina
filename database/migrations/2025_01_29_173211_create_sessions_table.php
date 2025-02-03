<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique()->id();
            $table->string('ip_address');
            $table->string('user_agent');
            $table->string('payload');
            $table->integer('last_activity');
            $table->integer('user_id');

            $table->index('last_activity');
            $table->index('user_id');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
