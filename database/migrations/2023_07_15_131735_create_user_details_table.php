<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
         $table->bigIncrements('id');
        //  $table->unsignedBigInteger('user_id');
            $table->string('project_name');
            $table->string('participants_name');
            $table->string('education');
            $table->string('branch');
            $table->string('college_name');
            $table->string('company_name');
            $table->string('transaction_id');
            $table->string('registration_fees');
            // $table->string('passport_size')->default('null');
            // $table->string('soft_copy')->default('null');
            $table->string('designation');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('user_details');
    }
}
