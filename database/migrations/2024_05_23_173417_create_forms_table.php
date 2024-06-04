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
        Schema::create('forms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string("name");
            $table->string("last_name");
            $table->string("email")->unique();
            $table->string("phone")->nullable(true);
            $table->foreignId("guest_companies_id");
            $table->integer('sent_mail')->nullable(true);
            $table->boolean('answered_form')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
