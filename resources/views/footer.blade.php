<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="head.css" type="text/css">
    <title>kintore</title>
</head>
<body>
<h1 class="h2">筋トレ</h1>
{{-- <form method="POST" action="{{ route('access') }}">
    @csrf
<button type="submit" value="送信"  class="">アクセスにいく</button>
</form> --}}
{{-- <form method="POST" action="{{ route('test') }}">
    @csrf
<button type="submit" value="送信"  class="">テストにいく</button> --}}
</form>
<form method="GET" action="{{ route('top') }}">
    @csrf
<button type="submit" value="送信"  class="logout">ログアウト</button>
</form>
<script src="jquery-3.6.3.js"></script>
<script type="text/javascript"src="script.js"></script>
</body>
</html>
