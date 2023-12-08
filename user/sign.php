<?php
include '../enum_department.php';
try{
  include '../pdo.php';
  $stmt = $pdo->query('select ログインid from ユーザー情報');
  $stmt->execute();
}catch(PDOException $e){
  echo "<pre>\n".$e->getMessage()."\n</pre>";
}finally{
  $pdo = null;
}

$result = $stmt->fetchAll();
$newface = true;
$info = "";
foreach ( $_SERVER as $key=>$value ) {
   $info .= "\$_SERVER[\"$key\"] == $value<br/>";
}
if (str_contains($info,"bdab862e-69fc-4932-ab21-96a46e05881f") === false && substr_compare($_SERVER["HTTP_MELLON_EMAIL"], department::business, 2, 1, true) === 0){
  foreach($result as $record){
    if($record['ログインid'] === substr($_SERVER["HTTP_MELLON_EMAIL"], 0, 5)){
      $newface = false;
    }
  }
  if($newface === false){
    header("Location:setnu.html");
    exit();
  }
}
?>