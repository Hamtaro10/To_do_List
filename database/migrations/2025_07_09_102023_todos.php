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
        Schema::create('todos', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('nama_kegiatan');
            $table->text('deskripsi')->nullable();
            $table->integer('minggu_ke');
            $table->string('hari');
            $table->boolean('status')->default(0);


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
