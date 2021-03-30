<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payins', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->foreignId('sender_user_id')->constrained('users');
            $table->string('sender_account_no')->nullable();
            $table->string('sender_country');
            $table->foreignId('gateway_id')->constrained('gateways');
            $table->foreignId('acknowledged_by_id')->nullable()->constrained('users');
            $table->timestamp('acknowledged_by_at')->nullable();
            $table->string('status')->default('Pending');//Waiting, Received
            $table->softDeletes();
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
        Schema::dropIfExists('payins');
    }
}
