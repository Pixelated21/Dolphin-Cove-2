<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_activities', function (Blueprint $table) {
            $table->id("sales_id");
            $table->foreignId("sales_rep_id")->constrained("sales_reps","sales_rep_id")->cascadeOnUpdate()->cascadeOnUpdate();
            $table->foreignId("week_id")->constrained("weekly","week_id")->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('sales');
    }
}
