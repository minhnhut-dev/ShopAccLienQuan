<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstraintUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('user', function (Blueprint $table) {

            $table->foreign('accounts_id')->references('id')->on('accounts');
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
        Schema::table('user', function (Blueprint $table) {
            $table->dropForeign('user_accounts_id_foreign');
        });
    }
}
