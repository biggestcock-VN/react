<?php
	session_start();
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$binhluan =$_POST['comment'];
		$email =$_POST['email'];
		if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)){
			echo "Email này đã hợp lệ :".$email."</br>";
		}
		else{
			echo "Email này không hợp lệ vui lòng nhập lại".$email."</br>";
		}
		if (preg_match("/^[a-zA-Z._-]{2,}/", $taikhoan)){
			echo "Tài khoản của bạn đã hợp lệ:".$taikhoan."</br>";
		}
		else{
			echo "Tài Khoản này không hợp lệ vui lòng nhập lại :".$taikhoan."</br>";
		}
		if (!trim($binhluan) == ''){
			echo "Bình luận của bạn đã được ghi nhận bình luận của bạn là :".$binhluan;
		}
		else{
			echo "Bạn chưa để lại bình luận"."</br>";
		}
	} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <div id="title">
            <h3>Mời bạn nhập bình luận: </h3>
        </div>
        <form action="/server.php" method="POST">
            <div class="user-data-field">
                <label for="user-name">Nhập tên</label>
                <input type="text" class="name" placeholder="Ví dụ: Lê Minh T" required><br><br>
            </div>
            <div class="user-data-field">
                <label for="user-email">Nhập email</label>
                <input type="text"  name="user-email" placeholder="xxx@example.com" required><br><br>
            </div>
            <div class="user-data-field">
                <label for="user-comment">Nhập bình luận</label>
                <input type="text" id="comment-area" name="user-comment" rows="4" cols="50" required><br><br>
            </div>
            <button type="submit" value="submit">Bình luận</button>
        </form>
    </div>
</body>

</html>