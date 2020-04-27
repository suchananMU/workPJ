
<!-- 61111829 นาย ธนกร อินนิล -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Student Detail</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<?php 
	$array_detail  = array(
		array('stdid' => '61119537' , 'subject_list' => array(
				array('subID'=>"ict60-101",'subName'=>"Pre-Cooperative Education",'unit'=>"1",'grade'=>"B"),
				array('subID'=>"ict60-102",'subName'=>"Database Design",'unit'=>"1",'grade'=>"B+"),
				array('subID'=>"ict60-103",'subName'=>"NoSQL Database Programming",'unit'=>"2",'grade'=>"A"),
				array('subID'=>"ict60-104",'subName'=>"Database Administration",'unit'=>"1.5",'grade'=>"B"))
			),
		array('stdid' => '61120808' , 'subject_list' => array(
				array('subID'=>"ict60-101",'subName'=>"Pre-Cooperative Education",'unit'=>"1",'grade'=>"B+"),
				array('subID'=>"ict60-102",'subName'=>"Database Design",'unit'=>"1",'grade'=>"B+"),
				array('subID'=>"ict60-103",'subName'=>"NoSQL Database Programming",'unit'=>"2",'grade'=>"A"),
				array('subID'=>"ict60-104",'subName'=>"Database Administration",'unit'=>"1.5",'grade'=>"B"))
			),
		array('stdid' => '61123257' , 'subject_list' => array(
				array('subID'=>"ict60-101",'subName'=>"Pre-Cooperative Education",'unit'=>"1",'grade'=>"B"),
				array('subID'=>"ict60-102",'subName'=>"Database Design",'unit'=>"1",'grade'=>"B+"),
				array('subID'=>"ict60-103",'subName'=>"NoSQL Database Programming",'unit'=>"2",'grade'=>"A"),
				array('subID'=>"ict60-104",'subName'=>"Database Administration",'unit'=>"1.5",'grade'=>"B+"))
			),
		array('stdid' => '61140749' , 'subject_list' => array(
				array('subID'=>"ict60-101",'subName'=>"Pre-Cooperative Education",'unit'=>"1",'grade'=>"B+"),
				array('subID'=>"ict60-102",'subName'=>"Database Design",'unit'=>"1",'grade'=>"A"),
				array('subID'=>"ict60-103",'subName'=>"NoSQL Database Programming",'unit'=>"2",'grade'=>"A"),
				array('subID'=>"ict60-104",'subName'=>"Database Administration",'unit'=>"1.5",'grade'=>"B"))
			),
		array('stdid' => '61140913' , 'subject_list' => array(
				array('subID'=>"ict60-101",'subName'=>"Pre-Cooperative Education",'unit'=>"1",'grade'=>"B"),
				array('subID'=>"ict60-102",'subName'=>"Database Design",'unit'=>"1",'grade'=>"A"),
				array('subID'=>"ict60-103",'subName'=>"NoSQL Database Programming",'unit'=>"2",'grade'=>"A"),
				array('subID'=>"ict60-104",'subName'=>"Database Administration",'unit'=>"1.5",'grade'=>"B+"))
			),
		array('stdid' => '61140996' , 'subject_list' => array(
				array('subID'=>"ict60-101",'subName'=>"Pre-Cooperative Education",'unit'=>"1",'grade'=>"A"),
				array('subID'=>"ict60-102",'subName'=>"Database Design",'unit'=>"1",'grade'=>"C"),
				array('subID'=>"ict60-103",'subName'=>"NoSQL Database Programming",'unit'=>"2",'grade'=>"A"),
				array('subID'=>"ict60-104",'subName'=>"Database Administration",'unit'=>"1.5",'grade'=>"B+"))
			),
	);
	
	$id = $_GET['id'];
	$stdid = $_GET['stdid'];
	$name = $_GET['name'];
	$gpax = $_GET['gpax'];
	$studentData = $array_detail[$id];
	/* print_r($studentData);
	echo "<br>".$studentData['stdid'];
	print_r($studentData['subject_list']); */

	?>
	
	<div id="stud-box"><h1>StudentID:<?php echo $stdid?> Name: <?php echo $name?> GAPX: <?php echo $gpax?> </h1></div>
	<table id="customers">
	    <tr>
	    <th>Subject ID</th>
	    <th>Subject Name</th>
	    <th>Unit</th>
	    <th>GPA</th>
	    <th>Score</th>
	  </tr>
	  <?php foreach ($studentData['subject_list'] as $key => $value) {
	  		

	  	?>
	  <tr>
	    <td align='center'><?php echo $value2['subID'] ?></td>
	    		<td align='center'><?php echo $value2['subName'] ?></td>
	    		<td align='center'><?php echo $value2['unit'] ?></td>
	    		<td align='center'><?php echo $value2['grade'] ?></td>
	    <?php
	     
	     	if ($value['grade']=="A"){
	     	$score = 4;
	     }else if ($value['grade']=="B+"){
	     	$score = 3.5;
	     }else if ($value['grade']=="B"){
	     	$score = 3;
	     }else if ($value['grade']=="C+"){
	     	$score = 2.5;
	     }else if ($value['grade']=="C"){
	     	$score = 2;
	     }else if ($value['grade']=="D+"){
	     	$score = 1.5;
	     }else if ($value['grade']=="D"){
	     	$score = 1;
	     }else{
	     	$score = 0;
	 }	
	   
	    ?>
	    <td ><?php echo $score*$value['unit'] ?></td>
	  	
		  </tr>
		<?php 
	  	}?>
	</table> 
	<a href="index.php"><button class="button">Back</button></a>
	
</body>
</html








