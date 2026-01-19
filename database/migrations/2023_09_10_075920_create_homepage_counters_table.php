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
        Schema::create('homepage_counters', function (Blueprint $table) {
            $table->id();
            $table->string('students')->nullable();
            $table->string('teachers')->nullable();
            $table->string('staff')->nullable();
            $table->string('educational_level')->nullable();
            $table->tinyInteger('status')->default(true);
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_counters');
    }
};
