<!DOCTYPE html>
@extends('layouts.app')
@section('content')
@include('layouts.nav')
<html lang="jp">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="text-center mt-6">
    <h2 class="result-title">おすすめのプラン一覧はこちら！</h2>
    <!-- 検索した条件と一致するプランがあれば表示 --> 
    @foreach($plans as $plan)
    <div class="row mt-3 mb-5" ".w-150">
        <div class="col-md-6 offset-md-3" ".w-120">        
            <div class="box30">
                <div class="box-title">
                      {{ $plan->plan_name }}
                </div>
                <div class="box-content">
                  ・料金：{{ $plan->fee }}円<br>
                  ・使用回線：{{ $plan->carrier }}<br>
                  ・毎月のギガ数：{{ $plan->GB }}<br>
                  ・通信制限時の速度：{{ $plan->limited_speed }}<br>
                  ・提供会社：{{ $plan->provider }}<br>
                </div>
                <div class="btn btn-c btn--green btn--cubic">
                  @php echo "<a class href='".$plan['url']."'>お問合せはこちら</a>"; @endphp
                </div>
                
            </div>
        </div>
    </div>
    @endforeach

    <!-- 一致する条件がなければ、次の要件を出す -->
    @if($plans->isEmpty())
        <div class="text-center mt-5">
            <p class="mt-4">{{ "条件に合うプランはありませんでしたが、あなたにはahamoがオススメです。" }}</p>
        </div>
        <div class="row mt-3 mb-5" ".w-150">
          <div class="col-md-6 offset-md-3" ".w-120">        
            <div class="box30">
                <div class="box-title">
                      ahamo
                </div>
                <div class="box-content">
                  ・料金：2970円<br>
                  ・使用回線：大手キャリア<br>
                  ・毎月のギガ数：20GB<br>
                  ・通信制限時の速度：1Mbps<br>
                  ・提供会社：NTTドコモ<br>
                </div>
                <div class="btn btn-c btn--green btn--cubic">
                  @php echo "<a class href="https://px.a8.net/svt/ejp?a8mat=3NJ0BW+EMWN5E+4TIO+5Z6WX">お問合せはこちら</a>"; @endphp
                </div>
                
            </div>
          </div>
        </div>
    @endif

    <div class="row justify-content-center mb-3">
        <a class="btn btn-light" href="/" name="back" style="color: black;">検索画面へ戻る</a>
    </div>
</body>
</html>
@endsection