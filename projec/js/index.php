<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta subName="viewport" content="width=device-width, initial-scale=1.0">
	<title>61111829</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	$array_data = array(
		array('subID'=>'61119537','subName'=>'ภาณุพงค์ ธราพร','school'=>'สารสนเทศศาสตร์','gpax'=>'3.94'),
		array('subID'=>'61120808','subName'=>'อาภาพรรณ ศรีสุระ','school'=>'สารสนเทศศาสตร์','gpax'=>'3.54'),
		array('subID'=>'61123257','subName'=>'กรวิชญ์ จิตรเขม้น','school'=>'การจัดการ','gpax'=>'3.33'),
		array('subID'=>'61140749','subName'=>'กัปปิย สุขล้ำเกิน','school'=>'การจัดการ','gpax'=>'3.76'),
		array('subID'=>'61140913','subName'=>'วรรณวิศา พูนผ่าน','school'=>'แพทย์ศาสตร์','gpax'=>'3.55'),
		array('subID'=>'61140996','subName'=>'ศุภกฤต วงค์ปัญญา','school'=>'แพทย์ศาสตร์','gpax'=>'3.23'),
);
	?>
	<div class="container">

    </div>
	<h1 class="form-control mr-3" bg-primary text-white> ข้อมูลผลการเรียนนักศึกษา </h1>
	<table class="" id="customers">
		<tr>
			<th>Student</th>
			<th>Name</th>
			<th>School</th>
			<th>GPAX</th>
			<th>Detail</th>
		</tr>
		<?php foreach ($array_data as $key => $value)

		 {?>
		<tr>
			<td align='center'><?php echo $value['subID']?></td>
			<td align='center'><?php echo $value['subName']?></td>
			<td align='center'><?php echo $value['school']?></td>
			<td align='center'><?php echo $value['gpax']?></td>
			<td align='center'><a href="detail.php?id=<?php echo $key; ?>0&studentID=<?php echo $value['stdid']; ?>&subName=<?php echo $value['subName']; ?>&gpax=<?php echo $value['gpax']; ?>">Detail</a></td>
		</tr>
		<?php }?>

	</table>
	</div>
</body>
</html>








