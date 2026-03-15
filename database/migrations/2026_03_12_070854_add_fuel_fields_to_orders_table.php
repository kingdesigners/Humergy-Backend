<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFuelFieldsToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('fuel_type')->nullable();
            $table->decimal('fuel_quantity', 10, 2)->nullable();
            $table->decimal('fuel_price',    10, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['fuel_type','fuel_quantity','fuel_price']);
        });
    }
}