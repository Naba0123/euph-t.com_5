<?php

return;
  
$show = 20;

$link = mysql_connect($host, $username, $password);
if (!$link) {
  die('<!-- データベースに接続失敗しました。'.mysql_error().' -->');
}

$db_selected = mysql_select_db('euphoria_time', $link);
if (!$db_selected){
  die('<!-- データベース選択失敗です。'.mysql_error().' -->');
}

mysql_query('SET NAMES utf8', $link);

$result = mysql_query("SELECT SQL_CALC_FOUND_ROWS * FROM illust ORDER BY uploaded DESC"); //DESCで降順
if (!$result) {
  die('<!-- クエリーが失敗しました。'.mysql_error().' -->');
}

$num_result = mysql_query('SELECT FOUND_ROWS()'); // 件数取得
list($num) = mysql_fetch_row($num_result);

echo "\n";
switch($num) {
  case "":
    echo "<!-- データベースには何もありません。-->\n";
    break;
  default:
//    if ($show > $num) {
      $show = $num;
//    }
    echo "<div class=\"row illust-padding\">\n";
    for ($i = 0; $i < $show; $i++) {
      $row = mysql_fetch_assoc($result);
      if (!empty($row['uploaded']) and !empty($row['title']) and !empty($row['cont']) and !empty($row['file']) ) {
        print "  <div class=\"col-xs-6 col-sm-4 col-md-3\">\n    <div class=\"illust\">\n";
        print "      <p>" . $row['title'] . "</p>\n";
        print "      <p class=\"illust-date\">" . date("Y/m/d",strtotime($row['uploaded'])) . "</p>\n";
        print "      <a href=\"./img/" . $row['file'] . "\" class=\"strip\" data-strip-caption=\"" . $row['cont'] . "\" data-strip-group=\"group01\">\n";
        print "        <img src=\"./img/thum-" . $row['file'] . "\" class=\"img-responsive\">\n";
        print "      </a>\n    </div>\n";
      }
    }
    echo "  </div>\n</div>\n";
}

$close_flag = mysql_close($link);
if (!$close_flag){
  print('<!-- 切断に失敗しました。-->');
}

?>