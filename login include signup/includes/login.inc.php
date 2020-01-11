<?php
session_start();
if(isset($_POST['login-submit'])){
	require 'dbh.inc.php';
	$mailuid=$_POST['mailuid'];
	$password=$_POST['pwd'];
    if(empty($mailuid)||empty($password)){
		header("Location: ../index.php?error=emptyfields");
		exit();
	}
	else{
		$sqlA="SELECT * FROM admin WHERE uidAdmin=? OR emailAdmin=?;";
		
		$sqlV="SELECT * FROM voter WHERE uidVoter=? OR emailVoter=?;";
		$sqlC="SELECT * FROM candidate WHERE uidCandidate=? OR emailCandidate=?;";
		$stmt=mysqli_stmt_init($conn);		
           
		   
		  if(mysqli_stmt_prepare($stmt,$sqlA)){
		    mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
		    mysqli_stmt_execute($stmt);
		    $result=mysqli_stmt_get_result($stmt);
		    $row=mysqli_fetch_assoc($result);
	      
		  if($row){
			$pwdCheck=password_verify($password,$row['pwdAdmin']);
			if($pwdCheck==false){
				header("Location: ../index.php?error=wrongpwd");
				exit();
			}
			else if($pwdCheck==true){
				session_start();
				$_session['Adminpwd']=$row['pwdAdmin'];
				$_session['Adminuid']=$row['uidAdmin'];
				header("Location: ../loginAdmin.php?login=success");
				exit();
			}
		}
	    }
		
		if(mysqli_stmt_prepare($stmt,$sqlV)){
		    mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
		    mysqli_stmt_execute($stmt);
		    $result=mysqli_stmt_get_result($stmt);
		    $row=mysqli_fetch_assoc($result);
		  
		  if($row){
			$pwdCheck=password_verify($password,$row['pwdVoter']);
			if($pwdCheck==false){
				header("Location: ../index.php?error=wrongpwd");
				exit();
			}
			else if($pwdCheck==true){
				session_start();
				$_session['Voterpwd']=$row['pwdVoter'];
				$_session['Voteruid']=$row['uidVoter'];
				header("Location: ../loginVote.php?login=success");
				exit();
			}
		}
	    }
		   
		if(mysqli_stmt_prepare($stmt,$sqlC)){
		    mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
		    mysqli_stmt_execute($stmt);
		    $result=mysqli_stmt_get_result($stmt);
		    $row=mysqli_fetch_assoc($result);
		  if(!$row){
			header("Location: ../index.php?error=nouserC");
		  }
		  else if($row){
			$pwdCheck=password_verify($password,$row['pwdCandidate']);
			if($pwdCheck==false){
				header("Location: ../index.php?error=wrongpwd");
				exit();
			}
			else if($pwdCheck==true){
				session_start();
				$_session['Candidatepwd']=$row['pwdCandidate'];
				$_session['Candidateuid']=$row['uidCandidate'];
				header("Location: ../loginCandidate.php?login=success");
			}
		}
		}
		else{
			header("Locatoin: ../index.php?error=sqlerror");
			exit();
		}
	}	
}
