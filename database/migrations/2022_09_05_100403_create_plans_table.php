<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id');
            $table->string('plan_name', 255);
            $table->integer('capacity');  
            $table->integer('cost');  //スマホ料金を絞りこむ
            $table->integer('fee');  //実際のスマホ料金
            $table->integer('carrier'); //大手キャリアの有無
            // $table->string('provider', 100);
            // $table->string('limited_speed', 100);
            // $table->string('GB', 100);
            // $table->string('url');
=======
            $table->increments('id');  //プランID
            $table->string('plan_name', 255);  //提供プラン、50文字以内
            $table->integer('capacity'); //利用しているスマホプランの容量
            $table->integer('cost');  //スマホ料金
            $table->integer('carrier');  //大手キャリアかどうか
>>>>>>> hoge
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