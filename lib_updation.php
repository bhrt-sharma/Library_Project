<?php
session_start();
$total=(sizeof($_POST))/4;

for($i=1;$i<=$total;$i++)
{   $index1="bookid".$i;
    $bookid[$i]=$_POST[$index1];//bookid ek array hai jismai hum store karwa rahe hai bookid ke data as per data feeded in the form table
    $index2="title".$i;
    $title[$i]=$_POST[$index2];
    $index3="price".$i;
    $price[$i]=$_POST[$index3];
    $index4="author".$i;
    $author[$i]=$_POST[$index4];
}

 $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lib_ait');

for($i=1;$i<=$total;$i++)
{
$q="UPDATE BOOKS SET title='$title[$i]' ,price=$price[$i],author='$author[$i]' WHERE bookid=$bookid[$i]"; 
$result=mysqli_query($con,$q);
}

mysqli_close($con);
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Updation</title>
    </head>
    <body>
        <h1>Book Record Managemnt</h1> 
        <p> <?php
             echo $total." Record/s Updated";
                
            ?> 
        
            
        </p>
        
        Dashboard<a href="lib_home.php">Click here</a>
    </body>
    
</html>