<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>thay thế</title>
	<style type="text/css">
		table{
			background: pink;
			width:  500px;
			margin:  auto;
		}
		.title{
			background: #3883cc;
			color: white;
			line-height: 35px;
			text-align: center;
			font-weight: bold;
		}
		.a{
			width: 360px;
			height: 30px;
			border: 1px solid gold;
			margin: 5px 0;
		}
	</style>
</head>
<body>
	<?php
		if (isset($_POST['submit']))
		{
			if (isset($_POST['chuoi']) && isset($_POST['tugoc']) && isset($_POST['tuthaythe']))// kiểm tra xem điểm đã đk nhập chưa khi bấm submit
			{
				$chuoi=$_POST['chuoi']; // lấy giá trị của ô nhập
				$tugoc=$_POST['tugoc'];
				$tuthaythe=$_POST['tuthaythe'];
				$chuoi_ketqua=str_replace($tugoc,$tuthaythe,$chuoi);
			}

		}	
	?>
	<form name="frmthaythe" method="POST">
		<table>
			<tr>
				<td colspan="2" class="title"> thay thế từ trong chuỗi</td>

			</tr>
			<tr>
				<td>chuỗi</td>
				<td> <input type="text" class="a" name="chuoi" value="<?php echo $_POST['chuoi']; ?>" /></td>
			</tr>
			<tr>
				<td>từ gốc</td>
				<td> <input type="text" class="a" name="tugoc" value="<?php echo $_POST['tugoc']; ?>" /></td>
			</tr>
			<tr>
				<td>từ thay thế</td>
				<td> <input type="text" class="a" name="tuthaythe" value="<?php echo $_POST['tuthaythe']; ?>" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <input type="submit" name="submit" value="thay thế" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <input type="text" name="kết quả" value="<?php echo $chuoi_ketqua ?>" /></td>
			</tr>
		</table>
	</form>
</body>
</html>