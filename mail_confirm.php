<!DOCTYPE html>
<html lang="ja">
<head>
    <title>お問合せフォームを作成</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    
</head>
<body>
        <h1>問い合わせ内容確認</h1>
            <div class="confirm">
                <p>お問い合わせ内容はこちらでよろしいでしょうか？
                    <br>よろしければ「送信する」ボタンをしてください
                </p>
                <p>
                    <label>名前</label>
                    <br>
                    <?php echo $_POST['name'];?>
                </p>

                <p>
                    <label>メールアドレス</label>
                    <br>
                    <?php echo $_POST['mail'];?>
                </p>

                <p>
                    <label>年齢</label>
                    <br>
                    <?php echo $_POST['age']."歳";?>
                </p>

                <p>
                    <label>コメント</label>
                    <br>
                    <?php echo $_POST['comments'];?>
                </p>

                <div class="buttons">
                    <form action="index.html">
                        <input type="submit" class="button1" value="戻って修正する"/>
                    </form>

                    <form action="insert.php" method="post">
                        <input type="submit" class="button2" value="登録する"/>
                        <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
                        <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                        <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
                        <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
                    </form>
                </div>
                
            </div>
            

</body>

</html>