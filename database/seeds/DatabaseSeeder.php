<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class DatabaseSeeder extends Seeder
{
    public function run(){
        //プラン1
        DB::table('plans')->insert([
            'plan_name' => "LINEMO ミニプラン",
            'provider' => "LINEMO",
            'limited_speed' => "300kbps",
            'GB' => "3GB",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 980,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.linemo.jp/plan/",
        ]);
        
        //プラン2
        DB::table('plans')->insert([
            'plan_name' => "povo2.0 データ追加3GB",
            'provider' => "povo2.0",
            'limited_speed' => "128kbps",
            'GB' => "3GB",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 980,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://povo.jp/spec/"
        ]);
        
        //プラン3、楽天モバイルを3GB未満で使った場合
        DB::table('plans')->insert([
            'plan_name' => "Rakuten UN-LIMIT Ⅶ",
            'provider' => "楽天モバイル",
            'limited_speed' => "上位料金に変更",
            'GB' => "3GB",
            'capacity' => 1,
            'cost' => 2,
            'fee' => 1078,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://network.mobile.rakuten.co.jp/fee/un-limit/"
        ]);
        
        //プラン4、楽天モバイルを20GB未満で使った場合
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル（3~20GB）",
            'provider' => "楽天モバイル",
            'limited_speed' => "上位料金に変更",
            'GB' => "20GB",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 2178,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://network.mobile.rakuten.co.jp/fee/un-limit/"
        ]);
        
        //プラン5、楽天モバイルを20GB以上で使った場合
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル（20GB以上）",
            'provider' => "楽天モバイル",
            'limited_speed' => "無制限のため制限速度なし",
            'GB' => "無制限",
            'capacity' => 3,
            'cost' => 3,
            'fee' => 3278,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://network.mobile.rakuten.co.jp/fee/un-limit/"
        ]);
        
        //プラン6、日本通信　合理的シンプル290プラン
        DB::table('plans')->insert([
            'plan_name' => "合理的シンプル290プラン",
            'provider' => "日本通信",
            'limited_speed' => "公式サイト以外アクセス不可",
            'GB' => "1GB",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 290,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.nihontsushin.com/service/"
        ]);
        
        //プラン7、HISモバイル 自由自在290プラン
        DB::table('plans')->insert([
            'plan_name' => "自由自在290プラン",
            'provider' => "HISモバイル",
            'limited_speed' => "128kbps",
            'GB' => "1GB",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 550,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://his-mobile.com/domestic/planlp_2022splan"
        ]);
        
        //プラン8 IIjmio(2ギガプラン)
        DB::table('plans')->insert([
            'plan_name' => "IIjmio（2ギガプラン）",
            'provider' => "IIjmio",
            'limited_speed' => "300kbps",
            'GB' => "2GB",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 850,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.iijmio.jp/hdc/spec/"
        ]);
        
        //プラン9 IIjmio（4ギガプラン）990円
        DB::table('plans')->insert([
            'plan_name' => "IIjmio（4ギガプラン）",
            'provider' => "IIjmio",
            'limited_speed' => "300kbps",
            'GB' => "4GB",
            'capacity' => 1,
            'cost' => 1,
            'fee' => 990,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.iijmio.jp/hdc/spec/"
        ]);
        
        //プラン10 LINEMO スマホプラン 2728円
        DB::table('plans')->insert([
            'plan_name' => "LINEMO スマホプラン",
            'provider' => "LINEMO",
            'limited_speed' => "1Mbps",
            'GB' => "20GB",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 2728,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.linemo.jp/plan/",
        ]);
        
        //プラン11 povo2.0 データ追加
        DB::table('plans')->insert([
            'plan_name' => "povo2.0 データ追加20GB",
            'provider' => "povo2.0",
            'limited_speed' => "128kbps",
            'GB' => "20GB",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 2700,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://povo.jp/spec/"
        ]);
        
        //プラン12 イオンモバイル
        DB::table('plans')->insert([
            'plan_name' => "さいてきプラン MORIMORI",
            'provider' => "イオンモバイル",
            'limited_speed' => "200kbps",
            'GB' => "20GB",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 1958,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://aeonmobile.jp/plan/"
        ]);
        
        //プラン13 IIJmio（20ギガプラン）2,000円
        DB::table('plans')->insert([
            'plan_name' => "IIJmio（20ギガプラン）",
            'provider' => "IIJmio",
            'limited_speed' => "300kbps",
            'GB' => "20",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 2000,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.iijmio.jp/hdc/spec/"
        ]);
        
        //プラン14 ahamo
        DB::table('plans')->insert([
            'plan_name' => "ahamo",
            'provider' => "NTTドコモ",
            'limited_speed' => "1Mbps",
            'GB' => "20",
            'capacity' => 2,
            'cost' => 2,
            'fee' => 2970,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://ahamo.com/plan/"
        ]);
        
        //プラン15 ahamo 大盛り
        DB::table('plans')->insert([
            'plan_name' => "ahamo 大盛り",
            'provider' => "NTTドコモ",
            'limited_speed' => "1Mbps",
            'GB' => "100",
            'capacity' => 3,
            'cost' => 3,
            'fee' => 4950,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://ahamo.com/plan/"
        ]);
        
        //プラン16 ドコモ 5Gギガホプレミア
        DB::table('plans')->insert([
            'plan_name' => "ドコモ 5Gギガホプレミア",
            'provider' => "NTTドコモ",
            'limited_speed' => "無制限のため制限速度なし",
            'GB' => "無制限",
            'capacity' => 3,
            'cost' => 3,
            'fee' => 7315,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.docomo.ne.jp/charge/5g-gigaho-premier/?icid=CRP_CHA_promotion_eraberu_to_CRP_CHA_5g-gigaho-premier"
        ]);
        
        //プラン17 au 使い放題MAX 7,328円
        DB::table('plans')->insert([
            'plan_name' => "au 使い放題MAX",
            'provider' => "au",
            'limited_speed' => "無制限のため制限速度なし",
            'GB' => "無制限",
            'capacity' => 3,    
            'cost' => 3,
            'fee' => 7328,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.au.com/mobile/charge/smartphone/plan/data-unlimited/"
        ]);
        
        //プラン18 ソフトバンク メリハリ無制限 7,238円
        DB::table('plans')->insert([
            'plan_name' => "ソフトバンク メリハリ無制限",
            'provider' => "ソフトバンク",
            'limited_speed' => "無制限のため制限速度なし",
            'GB' => "無制限",
            'capacity' => 3,
            'cost' => 3,
            'fee' => 7328,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.softbank.jp/mobile/price_plan/data/merihari-unlimited/"
        ]);
        
        //プラン19 ドコモ・ギガライト(3GM未満) 
        DB::table('plans')->insert([
            'plan_name' => "ドコモ ギガライト(3GB未満)",
            'provider' => "NTTドコモ",
            'limited_speed' => "128kbps",
            'GB' => "3GB",
            'capacity' => 1,
            'cost' => 3,
            'fee' => 4565,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.docomo.ne.jp/charge/gigalite-2/"
        ]);
        
        //プラン20 ドコモ・ギガライト(3GM〜7GB) 
        DB::table('plans')->insert([
            'plan_name' => "ドコモ ギガライト(3~7GB)",
            'provider' => "NTTドコモ",
            'limited_speed' => "128kbps",
            'GB' => "7GB",
            'capacity' => 2,
            'cost' => 3,
            'fee' => 6765,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.docomo.ne.jp/charge/gigalite-2/"
        ]);
        
        //プラン21 ソフトバンク ミニフィットプラン 1GB
        DB::table('plans')->insert([
            'plan_name' => "ミニフィットプラン(~1GB)",
            'provider' => "ソフトバンク",
            'limited_speed' => "128kbps",
            'GB' => "1GB",
            'capacity' => 1,
            'cost' => 3,
            'fee' => 3278,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.softbank.jp/mobile/price_plan/data/minifit-plan-plus/"
        ]);
        
        //プラン22 ソフトバンク ミニフィットプラン 2GB
        DB::table('plans')->insert([
            'plan_name' => "ソフトバンク ミニフィットプラン(~2GB)",
            'provider' => "ソフトバンク",
            'limited_speed' => "128kbps",
            'GB' => "2GB",
            'capacity' => 1,
            'cost' => 3,
            'fee' => 4378,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.softbank.jp/mobile/price_plan/data/minifit-plan-plus/"
        ]);
        
        //プラン23 ソフトバンク ミニフィットプラン 3GB
        DB::table('plans')->insert([
            'plan_name' => "ソフトバンク ミニフィットプラン(~3GB)",
            'provider' => "ソフトバンク",
            'limited_speed' => "128kbps",
            'GB' => "3GB",
            'capacity' => 1,
            'cost' => 3,
            'fee' => 5478,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.softbank.jp/mobile/price_plan/data/minifit-plan-plus/"
        ]);
        
        //プラン24 au ピタットプラン 1GB
        DB::table('plans')->insert([
            'plan_name' => "ピタットプラン(~1GB)",
            'provider' => "au",
            'limited_speed' => "128kbps",
            'GB' => "1GB",
            'capacity' => 1,    
            'cost' => 3,
            'fee' => 3278,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.au.com/mobile/charge/application-ended/pitatto/"
        ]);
        
        //プラン25 au ピタットプラン. 2GB
        DB::table('plans')->insert([
            'plan_name' => "auピタットプラン(~2GB)",
            'provider' => "au",
            'limited_speed' => "128kbps",
            'GB' => "2GB",
            'capacity' => 1,    
            'cost' => 3,
            'fee' => 4378,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.au.com/mobile/charge/application-ended/pitatto/"
        ]);
        
        //プラン26 au ピタットプラン. 3GB
        DB::table('plans')->insert([
            'plan_name' => "auピタットプラン(~3GB)",
            'provider' => "au",
            'limited_speed' => "128kbps",
            'GB' => "3GB",
            'capacity' => 1,    
            'cost' => 3,
            'fee' => 4928,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.au.com/mobile/charge/application-ended/pitatto/"
        ]);
        
        //プラン27 au ピタットプラン. 5GB
        DB::table('plans')->insert([
            'plan_name' => "auピタットプラン(~5GB)",
            'provider' => "au",
            'limited_speed' => "128kbps",
            'GB' => "5GB",
            'capacity' => 2,    
            'cost' => 3,
            'fee' => 6028,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.au.com/mobile/charge/application-ended/pitatto/"
        ]);
        
        //プラン28 au ピタットプラン. 5GB
        DB::table('plans')->insert([
            'plan_name' => "auピタットプラン(~20GB)",
            'provider' => "au",
            'limited_speed' => "128kbps",
            'GB' => "20GB",
            'capacity' => 2,    
            'cost' => 3,
            'fee' => 7128,
            'carrier_flag' => 1,
            'carrier' => "大手キャリア",
            'url' => "https://www.au.com/mobile/charge/application-ended/pitatto/"
        ]);
        
        //プラン29 イオンモバイル さいてきプラン MORIMORI
        
        //プラン30 イオンモバイル さいてきプラン MORIMORI
        DB::table('plans')->insert([
            'plan_name' => "さいてきプラン MORIMORI(~30GB)",
            'provider' => "イオンモバイル",
            'limited_speed' => "200kbps",
            'GB' => "30GB",
            'capacity' => 3,    
            'cost' => 3,
            'fee' => 3058,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://aeonmobile.jp/plan/"
        ]);
        
        //プラン31 イオンモバイル さいてきプラン MORIMORI
        DB::table('plans')->insert([
            'plan_name' => "さいてきプラン MORIMORI(~40GB)",
            'provider' => "イオンモバイル",
            'limited_speed' => "200kbps",
            'GB' => "40GB",
            'capacity' => 3,    
            'cost' => 3,
            'fee' => 4158,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://aeonmobile.jp/plan/"
        ]);
        
        //プラン32 イオンモバイル さいてきプラン MORIMORI
        DB::table('plans')->insert([
            'plan_name' => "さいてきプラン MORIMORI(~50GB)",
            'provider' => "イオンモバイル",
            'limited_speed' => "200kbps",
            'GB' => "50GB",
            'capacity' => 3,    
            'cost' => 3,
            'fee' => 5258,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://aeonmobile.jp/plan/"
        ]);
        
        //プラン33 HISモバイル 自由自在290プラン 
        DB::table('plans')->insert([
            'plan_name' => "自由自在290プラン(~50GB)",
            'provider' => "HISモバイル",
            'limited_speed' => "128kbps",
            'GB' => "50GB",
            'capacity' => 3,    
            'cost' => 3,
            'fee' => 5990,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://aeonmobile.jp/plan/"
        ]);
        
        //プラン34 日本通信 みんなのプラン
        DB::table('plans')->insert([
            'plan_name' => "みんなのプラン(~6GB)",
            'provider' => "日本通信",
            'limited_speed' => "公式サイト以外アクセス不可",
            'GB' => "6GB",
            'capacity' => 2,    
            'cost' => 2,
            'fee' => 1390,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.nihontsushin.com/plan/planminna.html"
        ]);
        
        //プラン35 日本通信 20GBプラン
        DB::table('plans')->insert([
            'plan_name' => "合理的20GBプラン",
            'provider' => "日本通信",
            'limited_speed' => "公式サイト以外アクセス不可",
            'GB' => "20GB",
            'capacity' => 2,    
            'cost' => 2,
            'fee' => 2178,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.nihontsushin.com/plan/plan20gb.html"
        ]);
        
        //プラン36 mineo マイピタ
        DB::table('plans')->insert([
            'plan_name' => "マイピタ(~1GB)",
            'provider' => "mineo",
            'limited_speed' => "契約により200kbps~1.5Mbps",
            'GB' => "1GB",
            'capacity' => 1,    
            'cost' => 2,
            'fee' => 1298,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://mineo.jp/mypita/"
        ]);
        
        //プラン37 mineo マイピタ
        DB::table('plans')->insert([
            'plan_name' => "マイピタ(~5GB)",
            'provider' => "mineo",
            'limited_speed' => "契約により200kbps~1.5Mbps",
            'GB' => "5GB",
            'capacity' => 2,    
            'cost' => 2,
            'fee' => 1518,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://mineo.jp/mypita/"
        ]);
        
        //プラン38
        DB::table('plans')->insert([
            'plan_name' => "マイピタ(~10GB)",
            'provider' => "mineo",
            'limited_speed' => "契約により200kbps~1.5Mbps",
            'GB' => "10GB",
            'capacity' => 2,    
            'cost' => 2,
            'fee' => 1958,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://mineo.jp/mypita/"
        ]);
        
        //プラン39
        DB::table('plans')->insert([
            'plan_name' => "mineo マイピタ(~20GB)",
            'provider' => "mineo",
            'limited_speed' => "契約により200kbps~1.5Mbps",
            'GB' => "20GB",
            'capacity' => 2,    
            'cost' => 2,
            'fee' => 2178,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://mineo.jp/mypita/"
        ]);
        
        //プラン40 donedone
        DB::table('plans')->insert([
            'plan_name' => "donedone(~50GB)",
            'provider' => "BIGLOBE",
            'limited_speed' => "1Mbps",
            'GB' => "50GB",
            'capacity' => 3,    
            'cost' => 2,
            'fee' => 2728,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://mineo.jp/mypita/"
        ]);
        
        //プラン41 BIGLOBE
        DB::table('plans')->insert([
            'plan_name' => "BIGLOBE mobile プランS",
            'provider' => "BIGLOBE",
            'limited_speed' => "200kbps",
            'GB' => "1GB",
            'capacity' => 1,    
            'cost' => 2,
            'fee' => 1078,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://join.biglobe.ne.jp/mobile/plan/?cl=head_mobile_plan"
        ]);
        
        //プラン42 BIGLOBE
        DB::table('plans')->insert([
            'plan_name' => "BIGLOBE mobile プランR",
            'provider' => "BIGLOBE",
            'limited_speed' => "200kbps",
            'GB' => "3GB",
            'capacity' => 1,    
            'cost' => 2,
            'fee' => 1320,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://join.biglobe.ne.jp/mobile/plan/?cl=head_mobile_plan"
        ]);
        
        //プラン43 BIGLOBE
        DB::table('plans')->insert([
            'plan_name' => "BIGLOBE mobile プランM",
            'provider' => "BIGLOBE",
            'limited_speed' => "200kbps",
            'GB' => "6GB",
            'capacity' => 2,    
            'cost' => 2,
            'fee' => 1078,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://join.biglobe.ne.jp/mobile/plan/?cl=head_mobile_plan"
        ]);
        
        //プラン44 ワイモバイル
        DB::table('plans')->insert([
            'plan_name' => "Y！mobile プランS",
            'provider' => "ワイモバイル",
            'limited_speed' => "300kbps",
            'GB' => "3GB",
            'capacity' => 1,    
            'cost' => 2,
            'fee' => 2178,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.ymobile.jp/plan/smartphone/"
        ]);
        
        //プラン45 ワイモバイル
        DB::table('plans')->insert([
            'plan_name' => "Y！mobile プランM",
            'provider' => "ワイモバイル",
            'limited_speed' => "1Mbps",
            'GB' => "15GB",
            'capacity' => 2,    
            'cost' => 3,
            'fee' => 3278,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.ymobile.jp/plan/smartphone/"
        ]);
        
        //プラン46 ワイモバイル
        DB::table('plans')->insert([
            'plan_name' => "Y！mobile プランL",
            'provider' => "ワイモバイル",
            'limited_speed' => "1Mbps",
            'GB' => "25GB",
            'capacity' => 3,    
            'cost' => 3,
            'fee' => 4158,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.ymobile.jp/plan/smartphone/"
        ]);
        
        //プラン47 UQモバイル
        DB::table('plans')->insert([
            'plan_name' => "UQ mobile くりこしプランS",
            'provider' => "UQ mobile",
            'limited_speed' => "300kbps",
            'GB' => "3GB",
            'capacity' => 1,    
            'cost' => 2,
            'fee' => 1628,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.uqwimax.jp/mobile/plan/"
        ]);
        
        //プラン48 UQモバイル
        DB::table('plans')->insert([
            'plan_name' => "くりこしプランM",
            'provider' => "UQ mobile",
            'limited_speed' => "1Mbps",
            'GB' => "15GB",
            'capacity' => 2,    
            'cost' => 3,
            'fee' => 2728,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.uqwimax.jp/mobile/plan/"
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "UQ mobile くりこしプランL",
            'provider' => "UQ mobile",
            'limited_speed' => "1Mbps",
            'GB' => "25GB",
            'capacity' => 3,
            'cost' => 3,
            'fee' => 3828,
            'carrier_flag' => 2,
            'carrier' => "MVNO",
            'url' => "https://www.uqwimax.jp/mobile/plan/"
        ]);
        
    }
}
