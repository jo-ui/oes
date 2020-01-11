<?php
if(isset($_POST['signup-submit'])){
	
	require 'dbh.inc.php';
	
	$username=$_POST['uid'];
	$email=$_POST['mail'];
	$password=$_POST['pwd'];
	$passwordRepeat=$_POST['pwd-repeat'];
	$gender=$_POST['sex'];
	$select=$_POST['userType'];
	if(empty($username)||empty($email)||empty($password)||empty($passwordRepeat||($gender))){
		header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: ../signup.php?error=invalidmail&uid".$username);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location: ../signup.php?error=invalidmail &uid=".$username);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: ../signup.php?error=invaliduid&mail".$email);
		exit();
	}
	else if($password!==$passwordRepeat){
		header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}
	else{
		if($select=='candidate'){
			$sql="SELECT uidCandidate FROM candidate WHERE uidCandidate=?";
		   $stmt=mysqli_stmt_init($conn);
		   if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../signup.php?error=sqlerro");
			exit();
		  }
		  else{
			mysqli_stmt_bind_param($stmt, "s",$username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0){
				header("Location: ../signup.php?error=usertaken&mail=".$email);
				exit();
			}
			else{
				$sql="INSERT INTO candidate(uidCandidate,emailCandidate,pwdCandidate,genderCandidate) VALUES(?,?,?,?)";
				$stmt=mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
					header("Location: ../signup.php?error=sqlerrorr");
					exit();
				}
				else{
				$hashedpwd = password_hash($password,PASSWORD_DEFAULT);
				
				mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$hashedpwd,$gender);
				mysqli_stmt_execute($stmt);
				header("Location: ../loginAdmin.php?signup=success");
				exit();
				}
			}
		}
		}
		else if($select=='voter'){
			$sql="SELECT uidVoter FROM voter WHERE uidVoter=?";
		   $stmt=mysqli_stmt_init($conn);
		   if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../signup.php?error=sqlerro");
			exit();
		  }
		  else{
			mysqli_stmt_bind_param($stmt, "s",$username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0){
				header("Location: ../signup.php?error=usertaken&mail=".$email);
				exit();
			}
			else{
				$sql="INSERT INTO voter(uidVoter,emailVoter,pwdVoter,genderVoter) VALUES(?,?,?,?)";
				$stmt=mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
					header("Location: ../signup.php?error=sqlerrorr");
					exit();
				}
				else{
				$hashedpwd = password_hash($password,PASSWORD_DEFAULT);
				
				mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$hashedpwd,$gender);
				mysqli_stmt_execute($stmt);
				header("Location: ../signup.php?signup=success");
				exit();
				}
			}
		}
		}
		else if($select=='admin'){
			$sql="SELECT uidAdmin FROM admin WHERE uidAdmin=?";
		   $stmt=mysqli_stmt_init($conn);
		   if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../signup.php?error=sqlerro");
			exit();
		  }
		  else{
			mysqli_stmt_bind_param($stmt, "s",$username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0){
				header("Location: ../signup.php?error=usertaken&mail=".$email);
				exit();
			}
			else{
				$sql="INSERT INTO admin(uidAdmin,emailAdmin,pwdAdmin,genderAdmin) VALUES(?,?,?,?)";
				$stmt=mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
					header("Location: ../signup.php?error=sqlerrorr");
					exit();
				}
				else{
				$hashedpwd = password_hash($password,PASSWORD_DEFAULT);
				
				mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$hashedpwd,$gender);
				mysqli_stmt_execute($stmt);
				$to=$email;
				$subject="UserName and Password for election system";
				$message="Your username is "+ $username + " you can use your email also as username "+ " and your password is "+ $password;
				$headers="From:tekleabiti12@gmail.com";
				mail($to,$subject,$message,$headers);
				header("Location: ../signup.php?signup=success");
				exit();
				}
			}
		}
		}
		else{
			header("Location: ../signup.php?error=typerrorr");
		    exit();
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location: ../signup.php");
	exit();
}