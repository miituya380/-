<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href= "css/top.css">
		<link rel="stylesheet" href="css/head.css">
		<link rel="stylesheet" href="css/footer.css">

		<title>トップページ</title>
	</head>

	<body>
		<!-- コンテナ -->
		<div class="container">

    <header>
        <h1><a href="top.html">top</a></h1>
        <table>
        <tr>
            <th><h2><a href="../管理者画面/top/top.html" class="r">管理者画面へ</a></h1></th>
            <th><h2><a href="編集・追加/mondaituika.html">ログアウト</a></h1></th>
        </tr>
    </table>
    
    </header>

			<!-- マルチカラム -->
			<div class="wrapper">

				<!-- 本文エリア -->
				<section class="main-area">
					<ul>
						<li>
							<a href="mondai.html">問題選択</a>
						</li>
						<li><a href="mondaisyu.html">成績閲覧</a></li>
					</ul>

                    
                    
                   
                    
                    <h4>お知らせ画面</h4>
                    
                    <div class="box5">
                        <body>
<?php
                        $conn = "host=localhost dbname=alldb user=pdo password=pg_pdo";
                        $link = pg_connect($conn);
                        if (!$link) {
                                die('接続失敗です。'.pg_last_error());
                        }

                        //print('接続に成功しました。<br>');

                        $result = pg_query('SELECT * FROM お知らせ');
                        if (!$result) {
                            die('クエリーが失敗しました。'.pg_last_error());
                        }
                        for ($i=0; $i < pg_num_rows($result);$i++){
                        $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
                        print($rows['お知らせ'].'<br>');
                        }

                        $close_flag = pg_close($link);

                        if ($close_flag){
                            //print('切断に成功しました。<br>');
                        }
?>
                        </body>
                    </div>

				</section>

			</div>
			<!-- マルチカラムここまで -->

		</div>
		<!-- コンテナここまで -->
		<footer>
			<ul>
				<li></li>
				<li></li>
			</ul>
		</footer>
	</body>
</html>
