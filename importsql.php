<?php 

$cmd = 'unzip -p /blablapath/2019-08-17.sql.zip | /Applications/MAMP/Library/bin/mysql --host=myhost -umyuser -pmypassword mydb';
$res = system($cmd); 

?>