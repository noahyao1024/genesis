<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTycheTable extends Migration
{
    private $_table = "tyche";

    /**
     * @brief 
     *
     * @return 
     */
    public function up()
    {
        Schema::create($this->_table, function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->timestamps();
            $table->string("extend_info")->default("");
            $table->bigInteger("genesis_id");
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
