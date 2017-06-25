<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenesisTable extends Migration
{
    private $_table = "genesis";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->_table, function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name");
            $table->enum("status", ["init", "audited_pass", "audited_fail"]);
            $table->dateTime("start_time");
            $table->dateTime("end_time");
            $table->string("create_user");
            $table->string("op_user");
            $table->timestamps();
            $table->string("extend_info")->default("");
            $table->unsignedTinyInteger("component_flag")->default(0);
            $table->bigInteger("tyche_id")->default(0);
            $table->bigInteger("rhea_id")->default(0);
            $table->index(["status", "name"], "main_query");
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
