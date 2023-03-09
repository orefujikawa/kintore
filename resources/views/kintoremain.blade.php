<h1>これはkintoremain</h1>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="kintoremain.css" type="text/css">
    <title>Document</title>

</head>
<body>
    @include('head')
    {{ session('name') }}
    <div class="kiroku">
<div class="kiro">
<p class='kyou'>今日の記録</p>
@if (isset($kintores))
{{  $kintores}}
@endif
</div>
<p class='kinou'>昨日の記録</p>
    </div>
    <div class='position'>
        <div class='position1'>


        <label>選択メニュー</label>
<form method="POST" id="sousin"  action="/kintoremain">
    @csrf

<label>ベンチプレス</label>
<input type="number" value='benchpressnumber' name="benchpressnumber"/></option><br>
<label>ダンベルフライ</label>
<input type="number" value='dumbbellflynumber' name="dumbbellflynumber"/></option><br>
<label>プッシュアップ</label>
<input type="number" value='pushupynumber' name="pushupnumber"/></option><br>
<label>サイドレイズ</label>
<input type="number" value='sideraisenumber' name="sideraisenumber"/></option><br>
</form>
<input type="submit" form="sousin" value="送信" class="botton"/>
        </div>
    <form method="POST" action="/access">
        @csrf
    <button type="submit" value="送信" class="bottons">アクセスにいく</button>
    </form>
</div>
    @include('footer')
</body>
</html>
