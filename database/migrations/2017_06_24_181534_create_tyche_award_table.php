<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTycheAwardTable extends Migration
{
    private $_table = "tyche_award";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->_table, function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("amount_queue")->default("");
            $table->integer("type")->default(0);
            $table->timestamps();
            $table->string("extend_info")->default("");
            $table->bigInteger("tyche_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->_table);
    }
}
