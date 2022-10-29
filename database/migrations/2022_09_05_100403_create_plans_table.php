<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');  //プランID
            $table->string('plan_name', 255);  //提供プラン、50文字以内
            $table->integer('capacity'); //利用しているスマホプランの容量
            $table->integer('cost');  //スマホ料金
            $table->integer('carrier');  //大手キャリアかどうか
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