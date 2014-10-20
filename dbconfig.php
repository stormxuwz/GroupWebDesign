<?php
   $host='localhost';
   $aduser='root';
   $adpass='mysql';

	// $host='mysql.ncsa.illinois.edu';
 //   	$aduser='emsa_admin';
 //   	$adpass='swapspiokcad';
   
   $link = mysql_connect($host, $aduser,  $adpass);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
 
    mysql_select_db('emsa_web');
?>