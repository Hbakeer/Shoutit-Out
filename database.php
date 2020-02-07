<?php
//Connect to MySQL
$con = mysqli_connect("localhost","root","","shoutit");

//Test Connection
if(mysqli_connect_errno()){
    echo'Failed' .mysqli_connect_error();
}