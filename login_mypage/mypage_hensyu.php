<?php
mb_internal_encoding("utf8");
session_start();
if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}
?>
<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    <body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>
    <main>
        <form action="mypage_update.php" method="post">
        <div class="mypage">
            <h2>会員情報</h2>
            <div class="hello">
                <?php echo"こんにちは！".$_SESSION['name']."さん";?>
            </div>
            <div class="photo">
                <img src="<?php echo $_SESSION['picture'];?>">
            </div>
            <div class="profile">
                 <div class="name">氏名:
                     <input type="text" class="formbox" size="20" value="<?php echo $_SESSION['name'];?>" name="name">
                 </div>
                <div class="mail">メール:
                    <input type="text" class="formbox" size="20" value="<?php echo $_SESSION['mail'];?>" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                </div>
                <div class="password">パスワード:
                    <input type="text" class="formbox" size="20" value="<?php echo $_SESSION['password'];?>" name="password" pattern="^[a-zA-Z0-9]{6,}$">
                </div>
            </div>
            <div class="comments2">
                <textarea rows="2" cols="50" value="<?php echo $_SESSION['comments'];?>" name="comments"></textarea>
            </div>
                <div class="button">
                    <input type="submit" class="submit_button" size="35" style="text-aline: center;" value="内容を変更する">
                </div>
        </div>
        </form>
    </main>
    <footer>©️2018 InterNous.inc.All rights reserved</footer>
    </body>
</html>