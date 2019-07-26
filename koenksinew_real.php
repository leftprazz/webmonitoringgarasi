<?php 
mysql_connect("host","user","password"); 
mysql_select_db("arduino"); 
$sql = mysql_query("select * from sensor"); 
if (mysql_num_rows($sql) == 0) { 
    echo "data kosong"; 
} else { 
    while ($row = mysql_fetch_array($sql)) { 
        echo $row['title']an>; 
    } 
} 