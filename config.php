<!-- Database Connection File-->

<?php 
	$con = mysqli_connect("localhost:3306" , "root" , "","CreditManagement");
	if(!$con)
	{
		echo "Problem in Database connection";
	}
?>

