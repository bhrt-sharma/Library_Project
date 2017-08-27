<?php
session_start();
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
    <title>Update Records</title>
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
    <form id="formu" action="lib_updation.php" method="post">
    <table id="tablu">
        <tr>
            <td><strong>Book_Id</strong></td>
            <td><strong>Title</strong></td>
            <td><strong>Price</strong></td>
            <td><strong>Author</strong></td>
        </tr>
    
        <?php
        for($i=1;$i<=$no_row;$i++)
        {
            $r_result=mysqli_fetch_array($result);//ask someone intelligent abt this
        ?>
        
        <tr>
        <td> <?php  echo $r_result['bookid']; ?>
            <input type="hidden" name="bookid<?php echo $i; ?>" value="<?php  echo $r_result['bookid'] ?>"</td>
        <td> <input type="text" name="title<?php echo $i; ?>" value="<?php  echo $r_result['Title'] ?>" </td>
        <td> <input type="text" name="price<?php echo $i; ?>" value="<?php  echo $r_result['Price'] ?>" </td>
        <td> <input type="text" name="author<?php echo $i; ?>" value="<?php  echo $r_result['Author'] ?>"</td>
        </tr>
        
        <?php
        }
        ?>
        <tr>
        <td colspan="4"> <input type="submit" value="Update??"> </td>
        </tr>    
    </table>
    </form>
    <div id="dash"> <a href="lib_home.php" > Back to dashboard??</a></div>
</body>
</html>