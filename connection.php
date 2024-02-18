<?php
$conn=new mysqli("localhost","root","","Clubs",3306);
if($conn->connect_error){
    echo "Connection Failed";
}
?>
