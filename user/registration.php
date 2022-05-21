<?php
	$name =$_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword= $_POST['confirmPassword'];

	$conn =new mysqli('localhost','root','','pet_smart');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	}
	else{
		$slquery = "SELECT * FROM registration WHERE email = '$email'";
    	$selectresult = mysqli_query($conn,$slquery);

		if(mysqli_num_rows($selectresult)>0){
			echo "<script>
				alert('Same Email Already Esists');
				window.location.href='http://localhost/PetSmart/user/index.html';
			</script>";	
		}
    	elseif($password != $confirmPassword){
			echo "<script>
				alert('Password did not match');
				window.location.href='http://localhost/PetSmart/user/index.html';
			</script>";
    	}
		else{

			$statement=$conn->prepare("insert into registration(name, email, password) values(?,?,?)");

			$statement->bind_param("sss",$name, $email, $password);
			$execval = $statement->execute();
	
			echo $execval;
			echo "<script>
				alert('Registration Successful. Please SignIn to continue');
				window.location.href='http://localhost/PetSmart/user/index.html';
			</script>";
			$statement->close();
			$conn->close();
		
		}
	}
?>