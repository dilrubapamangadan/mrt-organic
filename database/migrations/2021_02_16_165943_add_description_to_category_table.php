<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->longText('ct_description')->after('ct_name');
            $table->longText('ct_img')->after('ct_description')->nullable();
            $table->integer('ct_sp_slno')->after('ct_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->longText('ct_description');
            $table->longText('ct_img');
            $table->longText('ct_sp_slno');
        });
    }
}
