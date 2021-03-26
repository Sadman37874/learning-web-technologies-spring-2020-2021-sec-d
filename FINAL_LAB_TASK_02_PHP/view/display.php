<?php


	$title = "Display Page";
	include('header.php');
	
	require_once('../model/userModel.php');
?>

	<?php 
		echo "<fieldset>
			   <legend>Display</legend>
				<table border='1'>
				
				<tr>
				
				<td>NAME</td>
				<td>PROFIT</td>
				<td colspan='2'></td>
				</tr>";
	
		$row=getAllProduct();
		
		foreach($row as $var){
			
			echo
					


?>

	
