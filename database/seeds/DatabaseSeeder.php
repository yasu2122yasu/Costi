<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class DatabaseSeeder extends Seeder
{
    public function run(){
        //プラン1
        DB::table('plans')->insert([
            'plan_name' => "LINEMO ミニプラン",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 980,
            'carrier' => "大手キャリア",
            'url' => "https://www.linemo.jp/plan/",
        ]);
        
        //プラン2
        DB::table('plans')->insert([
            'plan_name' => "povo2.0 データ追加3GB",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 980,
            'carrier' => "大手キャリア",
            'url' => "https://povo.jp/spec/"
        ]);
        
        //プラン3、楽天モバイルを3GB未満で使った場合
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル（3GB）",
            'capacity' => 1,
            'cost' => 2,
            'fee' => 1078,
            'carrier' => "MVNO",
            'url' => "https://network.mobile.rakuten.co.jp/fee/un-limit/"
        ]);
        
        //プラン4、楽天モバイルを20GB未満で使った場合
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル（3~20GB）",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 2178,
            'carrier' => "MVNO",
            'url' => "https://network.mobile.rakuten.co.jp/fee/un-limit/"
        ]);
        
        //プラン5、楽天モバイルを20GB以上で使った場合
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル（20GB以上）",
            'capacity' => 3,
            'cost' => 3,
            'fee' => 3278,
            'carrier' => "MVNO",
            'url' => "https://network.mobile.rakuten.co.jp/fee/un-limit/"
        ]);
        
        //プラン6、日本通信　合理的シンプル290プラン
        DB::table('plans')->insert([
            'plan_name' => "日本通信 合理的シンプル290プラン",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 290,
            'carrier' => "MVNO",
            'url' => "https://www.nihontsushin.com/service/"
        ]);
        
        //プラン7、HISモバイル 自由自在290プラン
        DB::table('plans')->insert([
            'plan_name' => "HISモバイル 自由自在290プラン",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 550,
            'carrier' => "MVNO",
            'url' => "https://his-mobile.com/domestic/planlp_2022splan"
        ]);
        
        //プラン8 IIjimo(2ギガプラン)
        DB::table('plans')->insert([
            'plan_name' => "IIjimo（2ギガプラン）",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 850,
            'carrier' => "MVNO",
            'url' => "https://www.iijmio.jp/hdc/spec/"
        ]);
        
        //プラン9 IIjimo（4ギガプラン）990円
        DB::table('plans')->insert([
            'plan_name' => "IIjimo（4ギガプラン）",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 990,
            'carrier' => "MVNO",
            'url' => "https://www.iijmio.jp/hdc/spec/"
        ]);
        
        //プラン10 LINEMO スマホプラン 2728円
        DB::table('plans')->insert([
            'plan_name' => "LINEMO スマホプラン",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 2728,
            'carrier' => "大手キャリア",
            'url' => "https://www.linemo.jp/plan/",
        ]);
        
        //プラン11 povo2.0 データ追加
        DB::table('plans')->insert([
            'plan_name' => "povo2.0 データ追加20GB 2700円",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 2700,
            'carrier' => "大手キャリア",
            'url' => "https://povo.jp/spec/"
        ]);
        
        //プラン12 イオンモバイル(音声20GBプラン) 
        DB::table('plans')->insert([
            'plan_name' => "イオンモバイル(音声20GBプラン) ",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 1958,
            'carrier' => "MVNO",
            'url' => "https://aeonmobile.jp/plan/"
        ]);
        
        //プラン13 IIJmio（20ギガプラン）2,000円
        DB::table('plans')->insert([
            'plan_name' => "IIJmio（20ギガプラン）",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 2000,
            'carrier' => "MVNO",
            'url' => "https://www.iijmio.jp/hdc/spec/"
        ]);
        
        //プラン14 ahamo
        DB::table('plans')->insert([
            'plan_name' => "ahamo",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 2970,
            'carrier' => "大手キャリア",
            'url' => "https://ahamo.com/plan/"
        ]);
        
        //プラン15 ドコモ 5Gギガホプレミア
        DB::table('plans')->insert([
            'plan_name' => "ドコモ 5Gギガホプレミア",
            'capacity' => 3,
            'cost' => 3,
            'fee' => 7315,
            'carrier' => "大手キャリア",
            'url' => "https://www.docomo.ne.jp/charge/5g-gigaho-premier/?icid=CRP_CHA_promotion_eraberu_to_CRP_CHA_5g-gigaho-premier"
        ]);
        
        //プラン16 au 使い放題MAX 7,328円
        DB::table('plans')->insert([
            'plan_name' => "au 使い放題MAX 7,328円",
            'capacity' => 3,    
            'cost' => 3,
            'fee' => 7328,
            'carrier' => "大手キャリア",
            'url' => "https://www.au.com/mobile/charge/smartphone/plan/data-unlimited/"
        ]);
        
        //プラン17 ソフトバンク メリハリ無制限 7,238円
        DB::table('plans')->insert([
            'plan_name' => "ソフトバンク メリハリ無制限",
            'capacity' => 3,
            'cost' => 3,
            'fee' => 7328,
            'carrier' => "大手キャリア",
            'url' => "https://www.softbank.jp/mobile/price_plan/data/merihari-unlimited/"
        ]);
        
    }
}