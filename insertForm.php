<?php
session_start();
$t=$_POST['title'];
$p=$_POST['price'];
$a=$_POST['author'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lib_ait');

$q="INSERT INTO books(title,price,author) VALUES ('$t',$p,'$a')";
$result=mysqli_query($con,$q);//2-d aso_arrray but this time,its value will become 1 if $q is executed
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Insertion</title>
    </head>
    <body>
        <h1>Book Record Managemnt</h1> 
        <p> <?php
            if($result==1)
                echo "Record Sucessfully Entered";
            else
                echo "Something went Wrong.";
        ?> 
        </p>
        
        Do you want to enter more record<a href="lib_home.php">Click here</a>
    </body>
    
</html>
