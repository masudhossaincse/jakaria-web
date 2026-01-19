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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('serial')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('contact')->nullable();
            $table->string('mpo_code')->nullable();
            $table->string('gender')->nullable();
            $table->string('designation')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->date('date_of_mpo')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('ssc')->nullable();
            $table->string('hsc')->nullable();
            $table->string('ba')->nullable();
            $table->string('honours')->nullable();
            $table->string('masters')->nullable();
            $table->string('b_ed')->nullable();
            $table->string('m_ed')->nullable();
            $table->string('m_phil')->nullable();
            $table->string('phd')->nullable();
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
        Schema::dropIfExists('teachers');
    }
};
