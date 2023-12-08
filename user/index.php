<?php include 'sign.php'; ?>

<?php
try{
  include '../pdo.php';
  $stmt = $pdo->query("select * from ユーザー情報;");
  $stmt->execute();
}catch(PDOException $e){
  echo "<pre>\n".$e->getMessage()."\n</pre>";
}finally{
  $pdo = null;
}

$user = "Guest";
$result = $stmt->fetchAll();
foreach($result as $record){
  if(substr_compare($_SERVER["HTTP_MELLON_EMAIL"], $record["ユーザーid"], 0, 5)){
    $user = $record["出席番号"];
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>home</title>
  </head>
  <body>
    <h1>title</h1>
    <br align="right">出席番号：<?=$user; ?>　氏名：<?= $_SERVER["HTTP_MELLON_NAME"]; ?></br>
  </body>
</html>