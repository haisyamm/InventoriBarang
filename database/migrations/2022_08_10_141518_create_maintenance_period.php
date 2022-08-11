<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancePeriod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_periods', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_code');
            $table->string('asset_id');
            $table->string('service_name');
            $table->date('service_date');
            $table->string('purchase_order');
            $table->date('purchase_date');
            $table->string('attachment')->nullable();
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
        Schema::dropIfExists('maintenance_periods');
    }
}
