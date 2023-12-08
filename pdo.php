<?php
    $dsn = 'pgsql:host=localhost;port=5432;dbname=alldb';//PostgreSQLのホスト名、ポート番号、データベース名を指定
    $user = 'pdo';//使用するユーザー名を指定
    $pass = 'pg_pdo';//ユーザーのパスワードを指定
    $pdo = new PDO($dsn, $user, $pass);//$dsn, $user, $passを引数としてPDOオブジェクトを作成
?>