<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaydayLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payday_loans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('logo');
            $table->integer('votes');
            $table->integer('rating');
            $table->boolean('without_bik');
            $table->boolean('payout_15m');
            $table->boolean('first_free');
            $table->boolean('confirmed');
            $table->float('rrso', 8, 2);
            $table->integer('amount_min');
            $table->integer('amount_max');
            $table->integer('term');
            $table->text('url_application');
            $table->text('url_www');
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
        Schema::dropIfExists('payday_loans');
    }
}
