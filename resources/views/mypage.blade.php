{{ $sessiontest=session('sessiondate')}}
{{ $urls=session('url') }}
<h1>これはtest</h1>

@if ($urls==$sessiontest)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

</head>
<body>
    @include('head')
<p1>ようこそ<?php echo session('name');?></p1>
{{ session('login')}}
    <p>テスト</p>
    ここ
    <p>{{ isset($urls)}}{{ isset($sessiontest) }}</p>
    <li>ああ</li>
    <li>これはid<?php isset($requestdate)?>あ</li>
    <?php echo session('login');$aaa=session('login');echo 'これはつながり';echo $aaa;?>
    これはミドル{{ true }}です
    <form method="GET" action="/kintoremain">
        @csrf
        <button type="submit" value="送信" class="botton">筋トレメイン</button>
    </form>
@include('footer')
</body>
</html>
@endif
