function fetchcity(str) {
    
    "use strict";
    var req = new XMLHttpRequest();
    req.open("get", "http://localhost/bhrtlib/lib_cities.php?state=" + str, true); // get method se bej rhe hai "?(jo bhi naam hai)state= aisa use karke aur ismai concatenate kar rhe hai "+str" ko 
    
    req.send();//yaha se request bej rahe hai city wale php mai jo ki return karega hummai cities ka naam
    
    req.onreadystatechange = function () {
        if (req.readyState === 4 && req.status === 200) {
            document.getElementById("cities").innerHTML = req.responseText;
        }
    };


}


