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
    {{ session('accesss')}}
</br>

{{ $dbs }}
<?php echo session('login');$aaa=session('login');echo $aaa;?>
<h3>これ</h3>
@include('footer')
<script src="jquery-3.6.3.js"></script>
<script type="text/javascript"src="script.js"></script>
</body>
</html>
