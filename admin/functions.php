<?php

function check_login($con)
{
	if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
		$query = "select * from adminlogintable where username = '$username' limit 1";
		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$username = mysqli_fetch_assoc($result);
			return $username;

		}

	//redirect to login

		header("Location: index.php");
		die;
}
}