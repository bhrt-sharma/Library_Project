<?php 
session_start();
$total=sizeof($_POST);//sizeof() ye ek function hota hai jo ki size batata hai ki =kitnai elemnt bejai gaye hai from ke through.
$total=$total-1;
$j=1;
for($i=1;$i<=$total;$i++,$j++)
{
    $index="b".$j; // dot operator is used for concatenation 
    if(isset($_POST[$index])) // jo check box select hue the unki value milegi... $_POST[b1] will give 1      and isset function will check wether this box is selected or not
    $book_id[$i]=$_POST[$index]; // b_id is a 2-D array which will have the value of the selected boxes
    else
        $i--;;
}

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lib_ait');

for($k=1;$k<=$total;$k++)
{
    $q="DELETE FROM BOOKS WHERE bookid=".$book_id[$k];
    mysqli_query($con,$q);
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Deletion</title>
    </head>
    <body>
        <h1>Book Record Managemnt</h1> 
        <p> <?php
             echo $total." Record/s Deleted";
            ?> 
        </p>
        
        Dashboard<a href="lib_home.php">Click here</a>
    </body>
    
</html>


