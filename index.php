<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="ja">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="ja">
<![endif]-->
  <!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="ja">
<!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <title></title>
<?php
  if (isset($_GET['url'])) {
?>    
  <link rel="shortcut icon" href="http://www.google.com/s2/favicons?domain=<?php echo $_GET['url']; ?>">
<?php
  }
?>
</head>
<body>
<?php
  if (isset($_GET['url'])) {
?>
    <a href="<?php echo $_GET['url']; ?>">遷移先へ飛ぶ</a><br>
<?php
  }
?>

<?php
  showGnome();
?>

</body>
</html>

<?php
function showGnome() {
  echo "一日をむだにする方法はいくらでもある……しかし、一日を取り戻す方法は一つもない。 
</br>- トム・デマルコ<br>";
}
?>

