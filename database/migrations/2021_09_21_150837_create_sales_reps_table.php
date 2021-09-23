<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesRepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_reps', function (Blueprint $table) {
            $table->id("sales_rep_id");
            $table->foreignId("user_id")->constrained("users","user_id")->cascadeOnUpdate()->cascadeOnUpdate();
            $table->foreignId("com_id")->constrained("commissions_tiers","com_id")->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('sales_reps');
    }
}
