<?php 

//To connect the mysql connection 

require"connect_to_mysql.php"; 

$sqlCommand="CREATE TABLE admin(id inr(11) NOT NULL auto_increment,username varchar(255)NOT NULL,password varchar(255)NOT NULL,last_log_date date NOT NULL
PRIMARY KEY (id), UNIQUE KEY username(username)
}";

if(mysql_query($sqlCommand)){
	echo "your admin table has been created successfully!";
}
else{
	echo"CRITICAL ERROR: admin table has not been created";
}
	?>
	