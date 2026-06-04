<?php
$conn = mysqli_connect("localhost","root","","database");
if(!$conn){
    die("connection failed");
}
else{
    echo "database connected";
}


?>