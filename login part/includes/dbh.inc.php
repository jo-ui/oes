 <?php

$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="elect";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
if(!$conn){
	die("connectio field:".mysqli_connect_error());
}