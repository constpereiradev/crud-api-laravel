<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('category')->nullable(false);
            $table->string('status')->default('ACTIVE');
            $table->integer('quantity')->nullable(false);
            $table->date('created_at');
            $table->date('updated_at');
            $table->softDeletes('deleted_at');


        });


    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
