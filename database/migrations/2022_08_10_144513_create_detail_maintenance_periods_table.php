<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailMaintenancePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_maintenance_periods', function (Blueprint $table) {
            $table->id();
            $table->string('service_id');
            $table->string('task_name');
            $table->integer('task_duration');
            $table->date('due_date');
            $table->string('notes');
            $table->string('status')->default("ON PROGRESS");
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
        Schema::dropIfExists('detail_maintenance_periods');
    }
}
