<?php
//Database Connection

$conn=new mysqli('localhost','root','','unewswa_db');
if($conn->connect_error){
die("Connection Failed : ".$conn->connect_error);
}else{

}
?>