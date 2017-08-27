<?php
session_start();
if(!isset($_SESSION['user_real']))
header('location:http://localhost/bhrtlib/lib_login.html');//
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="home.css">  
       
    </head>
    <body>
        <h2>Hello , <?php echo $_SESSION['user_real'];?></h2> 
        <a href="lib_logout.php"> Logout</a>
        
        <table>
            <form action="insertForm.php" method="post">
        <tr>
            <td> Title </td>
            <td><input type="text" name="title" required></td>
        </tr>
        <tr>
            <td> Price </td>
            <td><input type="number" name="price" required></td>
        </tr>
        <tr>
            <td> Author </td>
            <td><input type="text" name="author"></td>
        </tr>
        <tr>
            <td><input type="submit" name="done"></td>
        </tr>
            </form>
          
            
    <div id="view_link"> <a href="lib_view.php">Click Me to see All the Books </a> </div>  
    
    <div id="update_link"> <a href="lib_update.php">Click Me To Make Updation </a> </div>  
            
    <div id="delete_link"> <a href="lib_delete.php">Click Me To Delete Record </a> </div>          
            
        </table>
    </body>
</html>