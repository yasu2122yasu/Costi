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
                      {{$plan->id}} . {{ $plan->plan_name }}
                </div>
                <div class="box-content">
                  ・{{ $plan->fee }}円<br>
                  ・{{ $plan->url }}<br>
                  ・a<br>
                  ・a<br>
                </div>
                <a href="" class="btn btn-c btn--green btn--cubic"><i class="fa fas fa-envelope"></i>お問い合わせはこちら</a>
            </div>
        </div>
    </div>
    @endforeach

    <!-- 一致する条件がなければ、次の要件を出す -->
    @if($plans->isEmpty())
        <div class="text-center mt-5">
            <p class="mt-4">{{ "お探しのプランはありませんでした。他の検索条件を試してみてください。" }}</p>
        </div>
    @endif
    
    <div class="row justify-content-center mb-3">
        <a class="btn btn-danger" href= "https://px.a8.net/svt/ejp?a8mat=3NJ0BW+EMWN5E+4TIO+5Z6WX" style="color: white;">5分間無料通話&20GBのahamoのお申し込みはこちら！</a>
    </div>
    
    <div class="row justify-content-center mb-3">
        <a class="btn btn-primary" href="https://h.accesstrade.net/sp/cc?rk=0100ohcq00lxzp" rel="nofollow" referrerpolicy="no-referrer-when-downgrade">格安SIMのHISモバイル公式サイトをこちら！</a>
    </div>
            
    <div class="row justify-content-center mb-3">
        <a class="btn btn-secondary" href="https://www.linemo.jp/">LINEMOのお申し込みはこちらから！</a>
    </div>
            
    <div class="row justify-content-center mb-3">
        <a class="btn btn-secondary" href="https://network.mobile.rakuten.co.jp/">楽天モバイルのお申し込みはこちらから！</a>
    </div>
            


    <div class="row justify-content-center mb-3">
        <a class="btn btn-light" href="/" name="back" style="color: black;">検索画面へ戻る</a>
    </div>
</body>
</html>
@endsection