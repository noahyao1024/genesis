<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTycheUserAwardTable extends Migration
{
    private $_table = "tyche_user_award";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->_table, function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger("user_id");
            $table->bigInteger("tyche_id");
            $table->timestamps();
            $table->string("extend_info")->default("");
            $table->index(["user_id", "tyche_id", ], "uid_tid");
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
