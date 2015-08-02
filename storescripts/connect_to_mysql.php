<?php
/* 
1: "die()" will execute and show an error ststement if something goes wrong with the "connect" or "select" functions.
2: A"mysql_connect()" error actually means your username password are wrong
3: A "mysql_select_db()" error usually means your database doesnot exist
*/

//place db host name. Sometimes "localhost" but
//sometimes looks like this:>>   ???mysql//.someserver.net

$db_host="localhost";

//place the username for the mysql database here
$db_username="root";

//place the password for the mysql database here
$db_pass="06452245554";

//Place the name of the mysql database here
$db_name="myonlinestore";

//Run the actual connection here
mysql_connect("$db_host","$db_username","$db_pass") or die("could not connect to mysql");
mysql_select_db("$myonlinestore") or die("no database");

?>

