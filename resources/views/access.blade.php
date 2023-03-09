<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="topcss.css" type="text/css">
    <title>kintore</title>
</head>
<body>
    @include('head')
    {{ session('login')}}
</br>

{{ $dbs }}
<?php echo session('login');$aaa=session('login');echo $aaa;?>
<h3>これ</h3>
<form method="POST" action="/kintoremain">
    @csrf
    <button type="submit" value="送信"  class="kintore">筋トレ</button>
</form>
    @include('footer')
</body>
</html>
