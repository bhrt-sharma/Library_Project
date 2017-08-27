<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lib_ait');
$q="SELECT * FROM BOOKS";
$result=mysqli_query($con,$q); //this reslt is a 2-D aso_array
$no_row=mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYLE html>
<html>
<head>
    <title>ALL BOOKS</title>
    <style>
    #tablu
        {
            border: 2px solid red;
            width: 500px;
        }
    #tablu tr
        {
            background-color: papayawhip;
        }
    #dash
        {
            border: 2px solid maroon;
            background-color: aliceblue;
            top: 550px;
            left: 150px;
            width: 150px;
        }
        
    </style>
    </head>
<body>
    <form id="form_s" action="lib_deletion.php" method="post">
    <table id="tablu">
        <tr>
            <td><strong>Book_Id</strong></td>
            <td><strong>Title</strong></td>
            <td><strong>Price</strong></td>
            <td><strong>Author</strong></td>
            <td><strong>Select To Delete</strong></td>
        </tr>
    
        <?php
        for($i=1;$i<=$no_row;$i++)
        {
            $r_result=mysqli_fetch_array($result);//ask someone intelligent abt this
        ?>
        
        <tr>
        <td><?php  echo $r_result['bookid'] ?></td>
        <td><?php  echo $r_result['Title'] ?></td>
        <td><?php  echo $r_result['Price'] ?></td>
        <td><?php  echo $r_result['Author'] ?></td>
        <td><input type="checkbox" value="<?php echo $r_result['bookid']; ?>" name="b<?php echo $i;?>"> </td>
        </tr>
        
        <?php
        }
        ?>
        <tr>
        <td colspan="5"  > <input type="submit" name="done" value="DELETE!!!"></td>
        </tr>
    </table>
       
    </form>
     <div id="dash"> <a href="lib_home.php" > Back to dashboard??</a></div>
</body>
</html>