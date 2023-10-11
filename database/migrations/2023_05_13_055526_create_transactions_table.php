<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('sender_id')->nullable();
            $table->string('receiver_id')->nullable();
            $table->string('account_number');
            $table->integer('amount');
            $table->string('date');
            $table->string('description');
            $table->integer('transaction_type_id');
            $table->enum('status', ['pending','completed','cancelled'])->default('pending');
            $table->boolean('is_credit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
