<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->nullOnDelete();
            $table->foreignId('location_region_id')->nullOnDelete();
            $table->foreignId('admin_id')->nullOnDelete()->comment('Received by this admin');
            $table->foreignId('query_category_id')->nullOnDelete();
            $table->date('date_of_shipment');
            $table->time('time_received');
            $table->string('batch_number');
            $table->string('temperature');
            $table->integer('number_of_sample');
            $table->integer('number_of_sample_with_query');
            $table->longText('query_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
