<?php
    include 'dbconfig.php';
    session_start();
    $signin="SELECT * FROM `test` WHERE 1"; 
    $res=mysql_query($signin);
    while($rows=mysql_fetch_assoc($res)){
      echo $rows['col1'];
}
?>
