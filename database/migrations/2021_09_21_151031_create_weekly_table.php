<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly', function (Blueprint $table) {
            $table->id("week_id");
            $table->foreignId("sales_rep_id")->constrained("sales_reps","sales_rep_id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer("week");
            $table->date("date");
            $table->float("accu_total")->default(0);
            $table->float("sales_amt")->default(0);
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
        Schema::dropIfExists('weekly');
    }
}
