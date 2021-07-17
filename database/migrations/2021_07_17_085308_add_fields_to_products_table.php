<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->longText('sub_header')->nullable()->after('name');
            $table->longText('short_description')->nullable()->after('description');
            $table->string('banner')->nullable()->after('img');
            $table->string('url')->nullable()->after('banner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('sub_header');
            $table->dropColumn('short_description');
            $table->dropColumn('banner');
            $table->dropColumn('url');
        });
    }
}
