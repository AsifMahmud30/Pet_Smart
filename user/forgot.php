<?php

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    $conn =new mysqli('localhost','root','','pet_smart');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	}

    $sql = "update registration set password='$password' where email='$email'";

    $slquery = "select * from registration where email = '$email'";
    	$selectresult = mysqli_query($conn,$slquery);

		if(mysqli_num_rows($selectresult)==0){
			echo "<script>
				alert('This email is not registered');
				window.location.href='http://localhost/PetSmart/user/forgot.html';
			</script>";	
		}
    	elseif($password != $confirmPassword){
			echo "<script>
				alert('Password did not match');
				window.location.href='http://localhost/PetSmart/user/forgot.html';
			</script>";
    	}
        else{
            if ($conn->query($sql) === TRUE) {
                echo "<script>
                        alert('Password changed successfully');
                        window.location.href='http://localhost/PetSmart/user/index.html';
                    </script>";
            }    
            else {
                echo "<script>
                        alert('Something went wrong');
                        window.location.href='http://localhost/PetSmart/user/index.html';
                    </script>";
            }
        }
    

?>