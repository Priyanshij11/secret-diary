<?php

$_server = "sql305.epizy.com";
$username = "epiz_29605859";
$password = "0ukum1FFmg";
$dbname = "epiz_29605859_user";

$conn = mysqli_connect($_server, $username, $password, $dbname);
        
        if (!$conn) {
            
            die ("Database Connection Error");
            
        }

?>