<!DOCTYPE html>
<html>
<head>
    <script src="lib_create.js"></script>
    </head>
<body>
    <div id="form">
    <form action="#" method="post">
        <label> Name</label>
        <input type="text" name="username" > <br>
        
        <label> Select State</label>
        <select onchange="fetchcity(this.value)">
        <option>Select State</option>
        <option>M.H</option>
        <option>M.P</option>
        <option>Delhi</option>
        </select><br>
        
        
        <label> Select City </label>
        <select id="cities">
        <option>First Select State</option>
       
        </select><br>
        
        <input type="submit" value="Enter!!">
    </form>
    </div>
</body>
    
</html>