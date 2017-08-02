<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QUẢN LÍ ĐIỂM CỦA HỌC SINH</title>
</head>
<body>
	<?php
		if (isset($_POST['submit']))
		{
			if (isset($_POST['diemk1']) && isset($_POST['diemk2']))
			{
				$diemk1=$_POST['diemk1'];
				$diemk2=$_POST['diemk2'];
				$diemtb=($diemk1 + $diemk2*2)/3;
				$diemtb=round($diemtb,2);
				if($diemtb>=5)
					{
						$kq= "được lên lớp";
					}
					else {
						$kq="không được lên lớp";
					}
				if($diemtb>=8)
					$xl="giỏi";
					elseif ($diemtb>=6.5 && $diemtb<8) 
						$xl="khá";
					elseif ($diemtb>5 && $diemtb>6.5) 
						$xl="trung bình";
										

			}
		}
	?>
	<form name="frmxeploai" method="POST">
		<table>
			<tr>
				<td colspan="2"  class="title"> Xếp loại học lực của học sinh</td>
			</tr>
			<tr>
				<td >Điểm kì 1</td>
				<td ><input type="text" name="diemk1" value="<?php if(isset($_POST['diemk1'])) {echo $_POST['diemk1'];}?>"/></td>

			</tr>
			<tr>
				<td >Điểm kì 2</td>
				<td ><input type="text" name="diemk2" value="<?php if(isset($_POST['diemk2'])) {echo $_POST['diemk2'];} ?>"/></td>

			</tr>
			<tr>
				<td >Điểm trung bình</td>
				<td> <input type="text" name="diemtb" value="<?php if(isset( $diemtb)){echo $diemtb;}?>"/></td>

			</tr>
			<tr>
				<td >Kết quả</td>
				<td> <input type="text" name="kq" value="<?php if(isset($kq)) {echo $kq;}?>"/></td>

			</tr>
			<tr>
				<td >Xếp loại học lực</td>
				<td ><input type="text" name="xl" value="<?php if(isset($xl)) {echo $xl;}?>"/></td>

			</tr>
			<tr>
				<td colspan="2" align="center" ><input type="submit" name="submit" value="xem kết quả"/></td>
			</tr>
		</table>
	</form>
</body>
</html>