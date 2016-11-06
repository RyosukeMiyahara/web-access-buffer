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
  <meta name="referrer" content="no-referrer">
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
  <div align="center">
    <a href="<?php echo $_GET['url']; ?>" rel=noreferrer referrerpolicy="no-referrer">遷移先へ飛ぶ</a><br>
  </div>
<?php
  $gnomes = array();
  $gnomes[count($gnomes)] = createGnome("一日をむだにする方法はいくらでもある……しかし、一日を取り戻す方法は一つもない。 ", "トム・デマルコ");
  $gnomes[count($gnomes)] = createGnome("自分の人生の時間は、もっとも貴重かつ価値のある大事な資源なので、それをどう使うかが、その人が人生で得られるものを大きく左右するよね。", "ちきりん");
  $gnomes[count($gnomes)] = createGnome("人生は一度、全ては自分次第、敵は己", "厚切りジェイソン");
  $gnomes[count($gnomes)] = createGnome("生きていれば、色々なものを失っていく。人や物、時間や心や記憶。しかし心配はいらない。失った以上のものをまた獲得すればいいだけのこと。世界は存在し続け、チャンスもまた存在し続ける。", "小池一夫");
  $gnomes[count($gnomes)] = createGnome("嫌なことがあったわけでもない、うれしかったことがあるわけでもないというフラットなときの自分の気分が、明るい気分か暗い気分か？僕の自分の心の健康診断です。基本の感情が憂鬱な時は、応急処置として、何か楽しくなれるようなアクションを起こすようにしています。早ければ早いほど効きます。", "小池一夫");

  showGnome($gnomes);
} else {
?>

  <p>GETパラメータ（url）に、遷移先のURLを渡してアクセスしてください。</p>

<?php
}
?>

</body>
</html>

<?php

function createGnome($body, $author) {
  $gnome['body']   = $body;
  $gnome['author'] = $author;
  return $gnome;
}


function showGnome(array $gnomes) {
  $num = rand(0, count($gnomes) - 1);
  echo '  <p>' . $gnomes[$num]['body']   . '</p>';
  echo '  <div align="right"><p>' . $gnomes[$num]['author'] . '</p></div>';
  return;
}
?>
