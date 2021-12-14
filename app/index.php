<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
      .my-panel {
        margin: 30px 15px 30px;
        padding: 30px;
      }
      .my-panel h2 {
        margin: 0px 0px 15px 10px;
      }
      .my-panel p {
        margin-bottom: 10px;
        font-size: medium;
      }
      .page-header {
        margin-top: 60px;
      }
    </style>
    
  </head>
  <body>
    
    <!-- Header -->
    <?php include './php/header.php'; ?>
    
    <div class="container">
      
      <div class="page-header">
        <h1><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Web Service</h1>
      </div>
      
      <div class="jumbotron my-panel">
        <h2>次のご注文は何羽ですか？</h2>
        <p>難民が過ぎて、次のごちうさが楽しみ？</p>
        <p>もう大丈夫、このページを見れば、次のごちうさがいつ放送されるのかひと目で分かります。ツイート機能もついています。</p>
        <p><a class="btn btn-primary btn-lg" href="./gochiusa/" role="button">詳しく</a></p>
      </div>
      
      <div class="page-header">
        <h1><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Desktop Application</h1>
      </div>
        
      <div class="jumbotron my-panel">
        <h2>SFTP Simple File Upload</h2>
        <p>秘密鍵も使えるSFTP簡易ファイルアップロードソフトが、ここに。</p>
        <p><a class="btn btn-primary btn-lg" href="javascript:void(0)" role="button">詳しく</a></p>
      </div>
      
    </div>
    
   
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>