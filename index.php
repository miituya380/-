<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PDO test</title>
  </head>
  <body>
    <?php
    try{
      include 'pdo.php';
      $stmt = $pdo->query('select * from 勘定科目');
      $stmt->execute();
    }catch(PDOException $e){
      echo "<pre>\n".$e->getMessage()."\n</pre>";
    }finally{
      $pdo = null;
    }
    ?>

    <p><table border>
      <tr>
        <th>勘定科目no</th>
        <th>科目名</th>
      </tr>
      <?php
      $result = $stmt->fetchAll();
      foreach($result as $record): ?>
        <tr>
          <td><?php echo $record['勘定科目no']; ?></td>
          <td><?php echo $record['科目名']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table></p>
  </body>
</html>

