<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Garally / Euphoria Time</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/normalize.css" rel="stylesheet" type="text/css">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <!-- lightbox -->
    <link href="../css/strip.css" rel="stylesheet" type="text/css">
    
    <style>
      .background-gradient {
        background: white;
        background: -moz-linear-gradient(top, lavenderblush, lightcoral);
        background: -webkit-linear-gradient(top, lavenderblush, lightcoral);
        /*標準型（方向は省略＿デフォルトの to bottom になる）*/
        background: linear-gradient(lavenderblush, lightcoral);
        background-attachment: fixed !important;
      }
      .illust {
        margin: 0px -6px 30px;
      }
      .illust-padding {
        margin-right: -5px;
        margin-left: -5px;
      }
      .illust p {
        margin-top: -3px;
        margin-bottom: 1px;
        letter-spacing: 0.1em;
        font-size: small;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }
      .illust-date {
        letter-spacing: 0.2em;
        font-size: x-small !important;
        float: right !important;
      }
      .illust a img {
        box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.3);
      }
    </style>
    
    <!-- font -->
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="vertical-center background-gradient" id="top">
      <div class="container text-center container-bg">
        
        <div class="row" style="margin-top: 40px">
          <div class="col-xs-12 visible-xs">
            <p class="mobile-title"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> <a href="../">Euphoria Time</a></p>
            <hr class="my-border">
          </div>
          <div class="col-sm-offset-2 col-sm-3 hidden-xs">
            <a href="../"><img src="../img/logo-mini.png" alt="logo" class="img-responsive center-block"></a>
          </div>
          <div class="col-sm-5 col-xs-12">
            <h1 id="contents"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Garally</h1>
            <p>イラストをまとめています。</p>
            <p>準備中のため仮画像設置中</p>
          </div>
        </div>
        
        <hr class="my-border">
        
        <div class="row illust-padding">
          <?php include './illust.php'; ?>
        </div>
        
        
        
        
        <hr class="my-border">
        <!-- footer -->
        <p><a href="#top"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Back Top</a></p>
        <div class="row">
          <div class="visible-xs">
            <p id="footer">2012-2015 Euphoria Time.<br>Designed by <a href="javascript:void(0)">Naba</a>.</p>
          </div>
          <div class="hidden-xs">
            <p id="footer">2012-2015 Euphoria Time. Designed by <a href="javascript:void(0)">Naba</a>.</p>
          </div>
        </div>
        
      </div>
    </div>
    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/strip.pkgd.min.js" type="text/javascript"></script>
    <!-- lightbox -->
    
    
  </body>
</html>