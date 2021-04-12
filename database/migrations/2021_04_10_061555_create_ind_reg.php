<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndReg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ind_reg', function (Blueprint $table) {
            $table->id();
            $table->string('d_cat')->nullable();
            $table->string('r_type')->nullable();
            $table->string('f_name')->nullable();
            $table->string('lom_area')->nullable();
            $table->integer('lom_id')->nullable();
            $table->string('position')->nullable();
            $table->string('gender')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('spouse')->nullable();
            $table->string('package_id')->nullable();
            $table->date('d_deposit')->nullable();
            $table->string('d_amt')->nullable();
            $table->string('u_vou')->nullable();
            $table->string('u_pho')->nullable();
            $table->string('hp1')->nullable();
            $table->string('hp2')->nullable();
            $table->string('hp3')->nullable();
            $table->string('f_pre')->nullable();
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
        Schema::dropIfExists('ind_reg');
    }
}
