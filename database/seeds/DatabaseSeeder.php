

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
   {
       
      //~1GBパターンのデータ
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO',
            'capacity' => 1,
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'povo2.0',
            'capacity' => 1,
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル',
            'capacity' => 1,
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO',
            'capacity' => 1,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'povo2.0',
            'capacity' => 1,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル',
            'capacity' => 1,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO',
            'capacity' => 1,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'povo2.0',
            'capacity' => 1,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル',
            'capacity' => 1,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO',
            'capacity' => 1,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'povo2.0',
            'capacity' => 1,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル',
            'capacity' => 1,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '日本通信',
            'capacity' => 1,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'HISモバイル',
            'capacity' => 1,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'IIjimo',
            'capacity' => 1,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '日本通信',
            'capacity' => 1,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'HISモバイル',
            'capacity' => 1,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'IIjimo',
            'capacity' => 1,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '日本通信',
            'capacity' => 1,    
            'cost' => 3,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'HISモバイル',
            'capacity' => 1,    
            'cost' => 3,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'IIjimo',
            'capacity' => 1,    
            'cost' => 3,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '日本通信',
            'capacity' => 1,    
            'cost' => 4,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'HISモバイル',
            'capacity' => 1,    
            'cost' => 4,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'IIjimo',
            'capacity' => 1,    
            'cost' => 4,
            'carrier' => 2,
        ]);
        
        
      //3GBパターンのデータ
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO',
            'capacity' => 2,    
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'povo2.0',
            'capacity' => 2,    
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル',
            'capacity' => 2,    
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO',
            'capacity' => 2,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'povo2.0',
            'capacity' => 2,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル',
            'capacity' => 2,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO',
            'capacity' => 2,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'povo2.0',
            'capacity' => 2,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル',
            'capacity' => 2,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO',
            'capacity' => 2,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'povo2.0',
            'capacity' => 2,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル',
            'capacity' => 2,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'HISモバイル',
            'capacity' => 2,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO',
            'capacity' => 2,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル',
            'capacity' => 2,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'HISモバイル',
            'capacity' => 2,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO',
            'capacity' => 2,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル',
            'capacity' => 2,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        
        
        
        
        
        
        
        
        
        
        
        
        DB::table('plans')->insert([
            'plan_name' => 'HISモバイル,LINEMO,楽天モバイル',
            'capacity' => 2,    
            'cost' => 3,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'HISモバイル,LINEMO,楽天モバイル',
            'capacity' => 2,    
            'cost' => 4,
            'carrier' => 2,
        ]);
        
      //20GBのパターンのデータ
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル,LINEMO,povo2.0',
            'capacity' => 3,    
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル,LINEMO,povo2.0',
            'capacity' => 3,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'ahamo,LINEMO,povo2.0',
            'capacity' => 3,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'ahamo,LINEMO,povo2.0',
            'capacity' => 3,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'イオンモバイル,IIjimo,楽天モバイル',
            'capacity' => 3,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'イオンモバイル,IIjimo,楽天モバイル',
            'capacity' => 3,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'イオンモバイル,IIjimo,楽天モバイル',
            'capacity' => 3,    
            'cost' => 3,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'イオンモバイル,IIjimo,楽天モバイル',
            'capacity' => 3,    
            'cost' => 4,
            'carrier' => 2,
        ]);
        
        //無制限プラン
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル,LINEMO,ahamo',
            'capacity' => 4,    
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル,LINEMO,ahamo',
            'capacity' => 4,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル,ahamo,LINEMO',
            'capacity' => 4,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'ドコモ 5Gギガホプレミア',
            'capacity' => 4,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル,LINEMO,ahamo',
            'capacity' => 4,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル,LINEMO,ahamo',
            'capacity' => 4,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル,ahamo,LINEMO',
            'capacity' => 4,    
            'cost' => 3,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'ドコモ 5Gギガホプレミア',
            'capacity' => 4,    
            'cost' => 4,
            'carrier' => 2,
        ]);
        
    }
}