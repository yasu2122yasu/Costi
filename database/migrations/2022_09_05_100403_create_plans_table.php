<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plan_name', 255);  
            $table->string('provider', 100);
            $table->string('limited_speed', 100);
            $table->string('GB', 100);
            $table->integer('capacity');  
            $table->integer('cost');  //スマホ料金を絞りこむ
            $table->integer('fee');  //実際のスマホ料金
            $table->string('carrier'); //大手キャリアの有無
            $table->string('url');
            $table->SoftDeletes();   //論理削除
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}