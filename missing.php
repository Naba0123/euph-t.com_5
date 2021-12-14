<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Not Found</title>
  </head>
  <body>
    <h1>404 Not Found</h1>
    <p>リクエストURL　：　<?php print((empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?></p>
    <p>お探しのページは見つかりませんでした。URLを確認して再アクセスをして下さい。</p>
    <p><a href="/">トップページへ戻る</a></p>
    <hr>
    <p>2012-2015 Euphoria Time. Designed by <a href="javascript:void(0)">-----</a>.</p>
  </body>
</html>