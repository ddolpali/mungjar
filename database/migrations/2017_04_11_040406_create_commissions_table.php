<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token');
            $table->tinyInteger('status')->default(0);
            $table->string('name');
            $table->string('paypal');
            $table->string('ign')->nullable();
            $table->string('deadline')->nullable();
            $table->string('type');
            $table->string('other')->nullable();
            $table->tinyInteger('commercial');
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('commissions');
    }
}
