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
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>

        <main>
            <form action="mypage_update.php" method="post">
                <h3>会員情報</h3>
                <p class="hello">こんにちは!　<?php echo $_SESSION['name']; ?>さん</p>
                    
                <div class="profile_pic"><img src="<?php echo $_SESSION['picture']; ?>"></div>

                <div class="basic_info">
                    <p>氏名:<input type="text" size="35" value="<?php echo $_SESSION['name']; ?>" name="name" required></p>
                    <p>メール:<input type="text" size="35" value="<?php echo $_SESSION['mail']; ?>" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required></p>
                    <p>パスワード:<input type="text" size="35" value="<?php echo $_SESSION['password']; ?>" name="password" required></p>
                </div>

                <div class="comments">
                <textarea rows="5" cols="80" name="comments"><?php echo $_SESSION['comments']?></textarea>
                </div>

                <div class="toroku">
                    <input type="submit" class="submit_button" size="40" value="この内容に変更する">
                </div>
            </form>
        </main>

        <footer>
            <p>🄫 2018 InterNous.inc. All rights reserved.</p>
        </footer>
    </body>
</html>