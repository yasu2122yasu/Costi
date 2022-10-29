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
    <!-- 検索した条件と一致するプランがあれば表示 --> 
    @foreach($plans as $plan)
    <h2 class="result-title">おすすめのプラン一覧はこちら！</h2>
    <div class="row mt-3 mb-5" ".w-150">
        <div class="col-md-6 offset-md-3" ".w-120">        
            <div class="box30">
                <div class="box-title">
                      {{ $plan->plan_name }}
                </div>
                <div class="box-content">
                  ・サービス提供者：{{ $plan->provider }}<br>   
                  ・料金：{{ $plan->fee }}円<br>
                  ・通信容量：{{ $plan->GB }}<br>
                  ・使用回線：{{ $plan->carrier }}<br>
                  ・通信制限速度：{{ $plan->limited_speed }}<br>
                  
                </div>
                <div class="btn btn-c btn--green btn--cubic">
                  @php echo "<a class href='".$plan['url']."'>お申し込みはこちら</a>"; @endphp
                </div>
                
            </div>
        </div>
    </div>
    @endforeach

    <!-- 一致する条件がなければ、次の要件を出す -->
    @if($plans->isEmpty())
        <div class="text-center mt-5">
            <h2 class="mt-4 result-title">{{ "お探しのプランはありませんでしたが、ahamoがオススメです。" }}</h2>
            <div class="row mt-3 mb-5" ".w-150">
       　　　　 <div class="col-md-6 offset-md-3" ".w-120">  
           　　　 <div class="box30">
              　  <div class="box-title">
                      ahamo
              　  </div>
              　  <div class="box-content">
                  ・サービス提供者：NTTドコモ<br>   
                  ・料金：2970円<br>
                  ・通信容量：20GB<br>
                  ・使用回線：大手キャリア<br>
                  ・通信制限速度：1Mbps<br>
                  
                </div>
                <div class="btn btn-c btn--green btn--cubic">
                  @php echo "<a class href='https://ahamo.com/plan/'>お申し込みはこちら</a>"; @endphp
                </div>
                
            </div>
        </div>
    </div>
        </div>
    @endif

    <div class="row justify-content-center mb-3">
        <a class="btn bg-danger" href="/" name="back" >検索画面へ戻る</a>
    </div>
</body>
</html>
@endsection