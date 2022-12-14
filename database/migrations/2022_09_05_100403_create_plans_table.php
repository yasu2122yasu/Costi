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
            $table->string('plan_name', 50);  //提供プラン、50文字以内
            $table->string('provider', 100);
            $table->string('limited_speed', 100);
            $table->string('GB', 100);    
            $table->integer('capacity'); //利用しているスマホプランの容量
            $table->integer('cost');  //スマホ料金
            $table->integer('fee');
            $table->integer('carrier_flag'); //大手キャリアかどうか（検索の方）
            $table->string('carrier');  //大手キャリアかどうか（表示の方）
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
