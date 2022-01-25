<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContribuyenteRegimenFiscal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('contribuyente', function (Blueprint $table) {
        $table->unsignedBigInteger('id_regimen_fiscal');
        $table->foreign('id_regimen_fiscal')->references('id')->on('regimen-fiscal');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
