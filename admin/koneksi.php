<?php
	define('db_host','localhost');
	define('db_user','root');
	define('db_pass',"");
	define('db_name','db_uas');
	
	mysql_connect(db_host,db_user,db_pass) or die (mysql_error());
	mysql_select_db(db_name) or die (mysql_error());

?>