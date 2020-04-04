<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOutletIdToSomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('outlet_id')->after('id')->constrained()->onDelete('cascade');
        });
        Schema::table('suppliers', function (Blueprint $table) {
            $table->foreignId('outlet_id')->after('id')->constrained()->onDelete('cascade');
        });
        Schema::table('inventories', function (Blueprint $table) {
            $table->foreignId('outlet_id')->after('id')->constrained()->onDelete('cascade');
        });
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreignId('outlet_id')->after('id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
