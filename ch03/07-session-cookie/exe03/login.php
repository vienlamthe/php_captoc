<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Login</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">PHP FILE - ADD</div>
        <div id="form">
            <?php
                if (@$_COOKIE['fullName'] != null) {
                    echo '<h3>Xin chào: '. $_COOKIE['fullName'] .'</h3>';
                    echo '<a href="logout.php">Đăng xuất</a>';    
                } else {
            ?>
                    <form action="process.php" method="post" name="add-form">
                        <div class="row">
                            <p>Username</p>
                            <input type="text" name="username" value="">
                        </div>

                        <div class="row">
                            <p>Password</p>
                            <input type="password" name="password" value="">
                        </div>
                        
                        <div class="row">
                            <input type="submit" value="Đăng nhập" name="submit" id="login">
                            <input type="reset" value="Reset" name="reset" id="reset-button">
                        </div>
                    </form> 
            <?php
                }
            ?>
        </div>        
    </div>
</body>
</html>
