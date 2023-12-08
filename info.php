<?php
require 'enum_department.php';

$info = "";
foreach ( $_SERVER as $key=>$value ) {
   $info .= "\$_SERVER[\"$key\"] == $value<br/>";
}

$group = "所属なし";
if (str_contains($info,"bdab862e-69fc-4932-ab21-96a46e05881f")) {
        $group = "教職員";
} elseif(substr_compare($_SERVER["HTTP_MELLON_EMAIL"], department::business, 2, 1, true) === 0) {
        $group = "学生（ビジネス科）";
} else {
        $group = "学生（その他）";
}
?>

<html>
<head>
<title>Your Account Infomation</title>
</head>
<body>
<div style="text-align: center;">
<h1>こんにちは！ <?=$_SERVER["HTTP_MELLON_NAME"] ?> さん</h1>
<br>
<p>メールアドレス：<?=$_SERVER["HTTP_MELLON_EMAIL"] ?></p>
<p>区分：<?=$group ?></p>
<br>
<a href="/saml/logout?ReturnTo=https://app.saitama-cmcc.ac.jp/">Logout</a>
<br><br>
<div style="text-align: left;"><?=$info; ?><div>
</div>
</body>
</html>