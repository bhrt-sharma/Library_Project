<?=php
    
    $s=$_GET['state'];
    $c1=array('Patna','xyz');
    $c2=array('Bhopal','Indore','Jabalpur');
    $c3=array('kanpur','agra','Lucknow');
    
    if($s=='M.H')
    {
        foreach($c1 as $c)
        {
            echo "<option>$c</option>";
        }
    }
    else if($s=="M.P")
    {
        foreach($c2 as $c)
        {
            echo "<option>$c</option>";
        } 
    }
    else if($s=="Dehli")
    {
         foreach($c3 as $c)
        {
            echo "<option>$c</option>";
        }
    }
    else
        echo "<option>First Select State</option>";
?>