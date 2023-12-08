<?php
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>question list</title>
  </head>
  <body>
    <h1>question list</h1>
    <p>
      <?php
      try{
        include '../pdo.php';
        $stmt = $pdo->query("select 問題集no, タイトル from 問題集 where 表示 = 't';");
        $stmt->excute();
        $result = $stmt-fetchAll();
        $stmt = null;
      }catch(PDOException $e){
      ?>
        <pre><?=$e->getMessage(); ?></pre>
      <?php
      }finally{
        $pdo = null;
      }
      ?>
    </p>
  </body>
</html>
