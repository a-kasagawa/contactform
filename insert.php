<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$sql ="insert into contactform (name, mail, age, comments) values (?,?,?,?)";
//$sql = "INSERT INTO contactform(name, mail, age, comments) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);

$stmt->bindvalue(1,$_POST['name']);
$stmt->bindvalue(2,$_POST['mail']);
$stmt->bindvalue(3,$_POST['age']);
$stmt->bindvalue(4,$_POST['comments']);

$stmt->execute();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>お問合せフォームを作成</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    
</head>
<body>
        <h1>問い合わせフォーム</h1>
            <div class="confirm">
                <p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
                </p>
            </div>


</body>

</html>