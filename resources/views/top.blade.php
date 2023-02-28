<!DOCTYPE html>
<html lang="jp">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="topcss.css" type="text/css">
    <title>kintore</title>
</head>
<body>
    @include('head')
    <div class="grid">
    <div class="grid1">
    <p>アカウント新規作成</p></br>


    <form method="GET" action="test">
        @csrf
    <P>あなたのユーザー名を入力してください</P>
    <P>英文字</P>
    <input type="text" value="111111" maxlength="6"minlength="6"name="idname"placeholder="ユーザー名"></br>
    <input type="email"value="aaaa@gmai.com" maxlength="25"minlength="10"name="email"placeholder="メールアドレス"></br>
    <p1>入力された数字とそのあとに表示されている数字がパスワードです</p1></br>
    <input type="password" value="111111111" maxlength="9"minlength="7" class="ruletext"name="pass"placeholder="パスワード">
    <?php echo($a=random_int(000,999));echo ($a);?></br>
    <button type="submit" value="送信" class="bottons"></button>
    </form>
    </div>


    <div class="grid2">
        <p>ログイン</p></br>
        <form method="GET" action="access">
            @csrf
        <P>あなたのユーザー名を入力してください</P>
        <P>英文字</P>
        <input type="text" maxlength="6"minlength="6" name="idname"placeholder="ユーザー名"></br>
        <input type="email" maxlength="25"minlength="10" name="email" placeholder="メールアドレス"></br>

        <p1>パスワード入力欄</p1></br>
        <input type="password" maxlength="9"minlength="7" name="pass"placeholder="パスワード">
        <?php echo($a=random_int(000,999));echo ($a);?></br>
        <button type="submit" value="送信" class="bottons"></button>
        </form>
        </div>
    </div>
    これはミドル{{ isset($aa) }}です
    @include('footer')

</body>
</html>
