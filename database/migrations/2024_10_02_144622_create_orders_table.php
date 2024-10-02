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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('car');
            $table->string('date');
            $table->string('description', 4000);
            $table->string('time');
            $table->integer('status')->default(1);
            $table->timestamps();

            $table->unsignedBigInteger('user_id')->nullable();

            $table->index('user_id', 'order_user_idx');

            $table->foreign('user_id', 'order_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
