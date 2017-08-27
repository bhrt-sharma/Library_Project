<?php
session_start();
$u=$_POST['reg'];
$p=$_POST['pas'];
$con=mysqli_connect('localhost','root'); // ___ ,username,password  
mysqli_select_db($con,'lib_ait');//database name
$q="SELECT * FROM USER WHERE USERNAME='$u' && PASSWORD='$p' ";
$reslt=mysqli_query($con,$q); //this reslt is a 2-D aso_array
$no_row=mysqli_num_rows($reslt);
if($no_row==1)
{
	$_SESSION['user_real']=$u;
	header('location:http://localhost/bhrtlib/lib_home.php');
}
else
{
	header('location:http://localhost/bhrtlib/lib_login.html');
}
