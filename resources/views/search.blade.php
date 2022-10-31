<!DOCTYPE html>
@extends('layouts.app')
@section('content')
@include('layouts.nav')
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>スマホ回線2.0</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
  <body>
    <div class="text-center mt-6 search-title" ".w-100">
      <h2>スマホ回線2.0</h2>
    </div>    
      <div class="row mt-3 mb-5" ".w-200">
        <div class="col-md-6 offset-md-3" ".w-120">
          <form method="get" action="/result" class="search-form">
          
            @csrf
          <div class="text-center search-title"><label for="capacity">毎月のデータ使用量を選択してください</label></div>
           <div class="container">
            <div class="radio-tile-group">
              
              <div class="input-container">
                <input class="radio-button" type="radio" id="capacity" name="capacity" value="1"  @if(isset($old_capacity) && (int)$old_capacity == 1) checked @endif>
                <div class="radio-tile">
                  <div class="fas fa-search fa-2x">
                      <path d="M0 0h24v24H0z" fill="none"/>
                  </div>
                <label for="capacity" class="radio-tile-label">0~3GB</label>
                </div>
              </div>

              <div class="input-container">
                <input class="radio-button" type="radio" id="capacity" name="capacity" value="2" @if(isset($old_capacity) && (int)$old_capacity == 2) checked @endif>
                <div class="radio-tile">
                  <div class="fas fa-sms fa-2x">
                  </div>
                <label for="capacity" class="radio-tile-label">4~20GB</label>
                </div>
              </div>
              
              <div class="input-container">
                <input class="radio-button" type="radio" id="capacity" name="capacity" value="3" @if(isset($old_capacity) && (int)$old_capacity == 3) checked @endif>
                <div class="radio-tile">
                  <div class="fab fa-youtube fa-2x">
                  </div>
                <label for="capacity" class="radio-tile-label">21GB~</label>
                </div>
              </div>
            </div>
          </div>  
              
          
          <!--料金検索のラジオボタン-->
          <div class="text-center search-title"><label for="cost">毎月のスマホ料金は？</label></div>
           <div class="container">
            <div class="radio-tile-group">
              
              <div class="input-container">
                <input class="radio-button" type="radio" id="cost" name="cost" value="1" @if(isset($old_cost) && (int)$old_cost == 1) checked @endif>
                <div class="radio-tile">
                  <div class="fas fa-coins fa-2x">
                  </div>
                <label for="cost" class="radio-tile-label">~1,000円</label>
                </div>
              </div>
              
              <div class="input-container">
                <input class="radio-button" type="radio" id="cost" name="cost" value="2" @if(isset($old_cost) && (int)$old_cost == 2) checked @endif>
                <div class="radio-tile">
                  <div class="fas fa-money-bill fa-2x">
                  </div>
                <label for="cost" class="radio-tile-label">~3,000円</label>
                </div>
              </div>
              
              <div class="input-container">
                <input class="radio-button" type="radio" id="cost" name="cost" value="3" @if(isset($old_cost) && (int)$old_cost == 3) checked @endif>
                <div class="radio-tile">
                  <div class="fas fa-money-check-alt fa-2x">
                  </div>
                <label for="cost" class="radio-tile-label">気にしない</label>
                </div>
              </div>
        
           </div>
          </div>
          
          
          <div class="text-center search-title"><label for="carrier_flag">大手キャリアを利用したいですか？</label></div>
           <div class="container">
            <div class="radio-tile-group">
              
              <div class="input-container">
                <input class="radio-button" type="radio" id="carrier_flag" name="carrier_flag" value="大手キャリア" @if(isset($old_carrier) && (int)$old_carrier == 1) checked @endif>
                <div class="radio-tile">
                  <div class="fas fa-building fa-2x">
                  </div>
                <label for="carrier_flag" class="radio-tile-label">はい</label>
                </div>
              </div>
              
              <div class="input-container">
                <input class="radio-button" type="radio" id="carrier_flag" name="carrier_flag" value="MVNO" @if(isset($old_carrier) && (int)$old_carrier == 2) checked @endif>
                <div class="radio-tile">
                  <div class="fab fa-battle-net fa-2x"></div>
                <label for="carrier_flag" class="radio-tile-label ">いいえ</label>
                </div>
              </div>
           </div>
          </div> 
          
          
          <div class="container submit">   
              <div class="text-center">
                <input type="submit" class="btn btn-danger" value="シミュレーション結果を見る！">
            </div>
          </div>

          </form>  
          
        </div>    
      </div>  
  </body>
</html>
@endsection
