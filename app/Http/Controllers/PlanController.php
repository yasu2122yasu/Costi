<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

//クエリビルダを使用する
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    
//search関数でsearch.blade.phpに値を渡す。
    public function search(Request $request)
    {
        //capcityに送られてきたデータを変数に保存
        $search_capacity = $request->input('capacity');
        $search_cost = $request->input('cost');
        $search_carrier_flag = $request->input('carrier_flag');
        
        //session()を使用し検索条件を保存し代入（戻るボタンを押したときに検索条件を保持）
        $old_capacity = $request->session()->get("old_capacity");
        $old_cost = $request->session()->get("old_cost");
        $old_carrier_flag = $request->session()->get("old_carrier_flag");

        //session()で一時的に保存した値をforget()で削除
        $request->session()->forget(
        [
          'old_capacity',
          'old_cost',
          'old_carrier_flag'
        ]);

        //view(search.blade.php)に変数を渡す。
        $data = [
            "old_capacity" => $old_capacity,
            "old_cost" => $old_cost,
            "old_carrier" => $old_carrier_flag
        ];
        return view('/search', $data);
    }



//result関数
    public function result(Request $request, Plan $plan)
      {
        //Requestで送られてきた値を代入
        $search_capacity = $request->input('capacity');
        $search_cost = $request->input('cost');
        $search_carrier_flag = $request->input('carrier_flag');

        //クエリビルダを使用し、planテーブルの中身を$queryに代入
        $query = Plan::query();
        
    

        //dbの$capacity とアプリ側の $capacity が一致していれば取得
        if (!is_null($search_capacity)) {
            $query->where('capacity', '=', $search_capacity)->get();

        }
        
        if (!is_null($search_cost)) {
            $query->where('cost', '=', $search_cost)->get();
        }
        
        if (!is_null($search_carrier_flag)) {
            $query->where('carrier_flag', '=', $search_carrier_flag)->get();
        }
        
        //1ページ10件でページネーションを追加　（orderBy()を使用し、plansを昇順で表示）
        $plans = $query->orderBy('fee', 'asc')->paginate(5);
        
        // //URL取得時にURLを指定してリダイレクト先を指定する。
        // if (empty($plans->id)){
        //     $alert = "<script type='text/javascript'>alert('この検索結果に合致するプランがありません。');</script>";
        //     echo $alert;
        //     echo '<script>location.host ;</script>';
        // }
        
        $request->session()->put("old_capacity", $search_capacity);
        $request->session()->put("old_cost", $search_cost);
        $request->session()->put("old_carrier_flag", $search_carrier_flag);
     
        $old_capacity = $request->session()->get("old_capacity");
        $old_cost = $request->session()->get("old_cost");
        $old_carrier_flag = $request->session()->get("old_carrier_flag");
        
        
        //view(result.blade.php)に変数を渡す
            $data = [
              "search_capacity" => $search_capacity,
              "search_cost" => $search_cost,
              "search_carrier_flag" =>$search_carrier_flag,
              "plans" => $plans,
              "old_capacity" => $old_capacity,
              "old_cost" => $old_cost,
              "old_carrier_flag" => $old_carrier_flag,
        ];
        return view('/result', $data);
        
        //こちらはview（search.blade.php）の戻るボタンのための動作
        if ($request->get('back')){
            return redirect('/')->withInput([ 
                $old_capacity, 
                $old_cost, 
                $old_carrier_flag, 
            ]);
        }
    }
}