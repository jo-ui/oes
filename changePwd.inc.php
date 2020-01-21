<?php
session_start();
if(isset($_POST['submit-change'])){
   $user=$_POST['uid'];
   $email=$_POST['maill'];
   $pwd=$_POST['oldPwd'];
   $Npwd=$_POST['newPwd'];
   $Rpwd=$_POST['coPwd'];
   if(empty($user)||empty($email)||empty($pwd)||empty($Npwd)||empty($Rpwd)){
    header("Location: ../changePwd.php?error=emptyfields");
    exit();
}
else if($Npwd!=$Rpwd){
    header("Location: ../changePwd.php?error=Password Don't match ");
    exit();
}
else{
    include('dbh.inc.php');
    $sqlA="SELECT * FROM admin WHERE uidAdmin=? OR emailAdmin=?;";
    
    $sqlV="SELECT * FROM voter WHERE uidVoter=? OR emailVoter=?;";
    $sqlC="SELECT * FROM candidate WHERE uidCandidate=? OR emailCandidate=?;";
    $stmt=mysqli_stmt_init($conn);		
      if(mysqli_stmt_prepare($stmt,$sqlA)){
        mysqli_stmt_bind_param($stmt,"ss",$user,$email);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        $row=mysqli_fetch_assoc($result);
      
      if($row){
        $pwdCheck=password_verify($pwd,$row['pwdAdmin']);
        if($pwdCheck==false){
            header("Location: ../changePwd.php?error=wrongpwd");
            exit();
        }
        else if($pwdCheck==true){
            $hashedpwd = password_hash($Npwd,PASSWORD_DEFAULT);
            $sql="UPDATE admin SET pwdAdmin='$hashedpwd' where emailAdmin='$email' ";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../error=sql");
                exit();
            }
            else{
			    mysqli_stmt_bind_param($stmt,"ssss",$user,$email,$hashedpwd,$gender);
			    mysqli_stmt_execute($stmt);
                header("Location: ../changePwd.php?Change Password=success");
                exit();
            }
        }
    }
    }
    if(mysqli_stmt_prepare($stmt,$sqlC)){
        $sql="SELECT pwdCandidate FROM candidate WHERE pwdCandidate=?";
        mysqli_stmt_bind_param($stmt,"ss",$user,$email);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        $row=mysqli_fetch_assoc($result);
      
      if($row){
        $pwdCheck=password_verify($pwd,$row['pwdCandidate']);
        if($pwdCheck==false){
            header("Location: ../changePwd.php?error=wrongpwd");
            exit();
        }
        else if($pwdCheck==true){
            
            $sql="UPDATE candidate SET pwdCandidate='$Npwd' WHERE emailCandidate='$email' ";
            $stmt=mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
					header("Location: ../changePwd.php?error=sqlerrorr");
					exit();
				}
				else{
				$hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
				
				mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$hashedpwd,$gender);
				mysqli_stmt_execute($stmt);
				header("Location: ../changePwd.php?change password=success");
				exit();
        }
    }
    }
    if(mysqli_stmt_prepare($stmt,$sqlV)){
        mysqli_stmt_bind_param($stmt,"ss",$user,$email);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        $row=mysqli_fetch_assoc($result);
      
      if($row){
        $pwdCheck=password_verify($pwd,$row['pwdVoter']);
        if($pwdCheck==false){
            header("Location: ../changePwd.php?error=wrongpwd");
            exit();
        }
        else if($pwdCheck==true){
            $sql="UPDATE Voter SET pwdVoter='$Npwd' where emailAdmin='$email' ";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../changePwd.php?error=sqlerrorr");
                exit();
            }
            else{
                $hashedpwd = password_hash($Npwd,PASSWORD_DEFAULT);
			    mysqli_stmt_bind_param($stmt,"ssss",$user,$email,$hashedpwd,$gender);
			    mysqli_stmt_execute($stmt);
                header("Location: ../changePwd.php?Change Password=success");
                exit();
            }
        }
    }
    }
}
}

}