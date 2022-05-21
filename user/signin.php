<?php
	$email=$_POST['email'];
	$password=$_POST['password'];

	//database connnection here;

	$connection = new mysqli("localhost", "root", "", "pet_smart");

	if($connection->connect_error){
		die("Failed to connect: ".$connection->connect_error);
	}
	else{
		$statement=$connection->prepare("select * from registration where email =?");
		$statement->bind_param("s",$email);
		$statement->execute();
		$statement_result= $statement->get_result();

		if($statement_result->num_rows>0){

			$data=$statement_result->fetch_assoc();

			if($data['password']==$password){
				header("Location: http://localhost/PetSmart/user/homepage.html");
			}
			else{
				echo "<script>
					alert('Invalid Credentials');
					window.location.href='http://localhost/PetSmart/user/index.html';
				</script>";
			}
		}
		else{
			echo "<script>
				alert('Invalid Credentials');
				window.location.href='http://localhost/PetSmart/user/index.html';
			</script>";
		}
	}

?>