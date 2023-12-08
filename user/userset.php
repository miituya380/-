<?php
try{
  include '../pdo.php';
  $stmt = $pdo->prepare("insert into ユーザー情報(ユーザーid, 氏名, 出席番号, 管理者) values(?, ?, ?, 'false');");
  $stmt->bindValue(1, $_SERVER["HTTP_MELLON_EMAIL"]);
  $stmt->bindValue(2, $_SERVER["HTTP_MELLON_NAME"]);
  $stmt->bindValue(3, $_POST["usernu"], PDO::PARAM_INT);
  $stmt->execute();
}

header("Location:index.php");
exit();