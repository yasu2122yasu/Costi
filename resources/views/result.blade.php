<!DOCTYPE html>
<html lang="jp">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div class="text-center mt-6">
    <br>
        <h2>おすすめのプラン一覧はこちら！</h2>
    <!-- 検索した条件と一致するプランがあれば表示 --> 

    @foreach($plans as $plan)
    <div>
        <div class="m-4 row">
            <div class="col-10">
                <h4 class="font-weight-bold positon">
                    {!! nl2br(e($plan->plan_name)) !!}
                </h4>
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


    <div class="row justify-content-center mb-3">
        <a class="btn btn-light" href="/" name="back" style="color: black;">検索画面へ戻る</a>
    </div>
</html>