<h1>これはkintoremain</h1>


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
    <form method="GET" action="access">
        @csrf
    <button type="submit" value="送信" class="bottons"></button>
    </form>
    @include('footer')
</body>
</html>
