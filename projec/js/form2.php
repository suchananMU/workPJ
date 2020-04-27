<pre>
<?php
	
	if ($_GET['a'] == 1) {
		print_r($_GET);

	echo  "Name is" . " $_REQUEST[firsname] " . " $_REQUEST[lastname] " . "<br/>" ;
	echo  "The Password is" . " $_REQUEST[Password] "  . "<br/>" ;
	echo  "The address is" . " $_REQUEST[Address] "  . "<br/>" ;
	echo  "The favorite game is/are" ;
	foreach ($_REQUEST["game"] as $key => $value) {
		echo " ".$value . ",." ;
	}
	echo "<br/>";
	echo  "The gender is" . " $_REQUEST[gender] "  . "<br/>" ;
	echo  "The age is the rang of " . " $_REQUEST[age] "."."  . "<br/>" ;
	
	exit;
	}
	
	


?>
	</pre>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="?a=1" method="post">
		<table border="1">
			<tr>
				<td colspan=2> User From </td>
			</tr>
			<tr>
				<th>Enter Name</th>
				<td><input type="text" 
							name="firsname"
							placeholder="Input youe tname" 
							/>

				</td>
			</tr>
			<tr>
				<th>Lastname</th>
				<td><input type="text" 
							name="lastname"
							placeholder="Input youe name" 
							/>

				</td>
			</tr>
			<tr>
				<th style="width: 200px">
					Password
				</th>
				<td> <input type="Password" name="Password" style="width: 200px"placeholder="Input youe Password" ></td>
			</tr>

		
			
			<tr>
				<th style="width: 200px">
					Enter Address
					
				</th>
				<td>
					<textarea name="Address" id="textAddress" cols="30" rows="5"></textarea>
				</td>
			</tr>
			<tr>
				<th style="width: 200px">Select Game </th>
				<td>
					<input type="checkbox" name="game[0]" value="Hockey" />Hockey <br/>
					<input type="checkbox" name="game[1]" value="Football" />Football <br/>
					<input type="checkbox" name="game[2]" value="Badminton" />Badminton <br/>
					<input type="checkbox" name="game[3]" value="Cricket" />Cricket <br/>
					<input type="checkbox" name="game[4]" value="Basketball" />Basketball <br/>
				</td>
			</tr>
			
			<tr>
				<th style="width: 200px">Gender </th>
				<td>
					<input type="radio" name="gender" value="Male" />Male 
					<input type="radio" name="gender" value="FeMale" />FeMale 
					<input type="radio" name="gender" value="N/A" />N/A
				</td>
			</tr>
			
			<tr>
				<th style="width: 200px">Age </th>
				<td>
					<select name="age" id="">
						<option value="young">1-15</option>
						<option value="teen">16-22</option>
						<option value="worker">23-60</option>
						<option value="older">61++</option>
					</select>
				</td>
			</tr>


				<tr>
				<td colspan=2 >
					<input type="button" value="Click me" />
					<input type="reset" value="reset" />
					<input type="submit" value="Save" / >
				</td>
			</tr>

		</table>
	</form>
</body>
</html>