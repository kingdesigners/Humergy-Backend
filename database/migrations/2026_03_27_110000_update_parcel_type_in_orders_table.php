<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateParcelTypeInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            if (!Schema::hasColumn('orders', 'service_id')) {
                $table->unsignedBigInteger('service_id')->nullable()->after('city_id');
                $table->foreign('service_id')->references('id')->on('services')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'service_id')) {
                $table->dropForeign(['service_id']);
                $table->dropColumn('service_id');
            }
        });
    }
}
