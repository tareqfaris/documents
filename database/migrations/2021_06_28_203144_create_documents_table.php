<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("age")->nullable();
            $table->string("gender")->nullable();
            $table->string("mother_name")->nullable();
            $table->string("phone")->nullable();
            $table->date("dob")->nullable();
            $table->string("school_name")->nullable();
            $table->string("school_year")->nullable();
            $table->string("school_type")->nullable();
            $table->string("qopol")->nullable();
            $table->string("register_year")->nullable();
            $table->string("city")->nullable();
            $table->string("address")->nullable();
            $table->boolean("son")->default(false)->nullable();
            $table->string("son_info")->nullable();
            $table->boolean("first")->default(false)->nullable();
            $table->string("father_phone")->nullable();
            $table->integer("sum")->default(0)->nullable();
            $table->integer("dor")->default(1)->nullable();
            $table->integer("final_sum")->default(0)->nullable();
            $table->string("option1")->nullable();
            $table->string("option2")->nullable();
            $table->integer('user_id')->nullable()->default(0);
            $table->integer('department_id')->nullable()->default(0);
            $table->string('code')->nullable();
            $table->text('content')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->string('title')->default('بدون عنوان')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('documents');
    }
}
