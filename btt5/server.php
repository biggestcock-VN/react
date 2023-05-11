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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập Tuần 5</title>
	<style type="text/css">
		body{
			background:#f2f2f2;
		}
		.wrapper-login {
		    width: 30%;
		    margin: 0 auto;
		}
		table.table-login {
		    width: 100%;
		}
		table.table-login tr td {
		    padding: 5px;
		}
	</style>
</head>
<body>
	<div class="wrapper-login">
    <form action="" autocomplete="off" method="POST">
		<table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>Để bình luận vui lòng để lại</h3></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Bình luận</td>
				<td><textarea id="text" name="comment" cols="auto" rows="auto"></textarea></td>
			</tr>
            <tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
			</tr>
	</table>
	</form>
	</div>
</body>
</html>