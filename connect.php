
<?php
//connect to mysql
$servername="localhost";
$username="root";
$password="";
$dbname="mharticle";
//create connection
$conn =  mysqli_connect($servername,$username,$password,$dbname);

//die if connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>