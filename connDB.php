<?php
$servername="localhost";
$username="root";
$password="";
$database="e-commerce";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn){
    //echo"your connecton is successful";
}
else{
    echo"error in connection";
}

?>