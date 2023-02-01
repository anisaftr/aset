<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableFormulir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formulir', function (Blueprint $table) {
            $table->integer('status')->unsigned()->nullable()->after('jumlah');

            $table->foreign('status')->references('id')->on('statusform')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formulir', function (Blueprint $table) {
            //
        });
    }
}
