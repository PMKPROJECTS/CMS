<?php 
//1st way
/*
$connection = mysqli_connect("localhost","root","","cms");

if($connection)
{
    echo "we are connected";
}
*/
//2nd way
/*
$db["hostname"] = "localhost";
$db["username"] = "root";
$db["password"] = "";
$db["dbname"] = "cms";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);

if($connection)
{
    echo "we are connected";
}
*/

//3rd way
$dbserver = "localhost";
$dbuser = "root";
<<<<<<< HEAD
$dbpassword = " ";
=======
$dbpassword = "";
>>>>>>> 9c2b4a7d3f3db2da7b2e1c2ae17e100f75f8348f
$dbname = "cms";

$connection = mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname);
if(!$connection)
{
    echo "not connected";
}
?>