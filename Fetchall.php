<?php
mysql_connect("localhost", "root", "");
mysql_select_db("MyDB");
$sql = mysql_query("select * from signup");
while ($row = mysql_fetch_object($sql)) {
         echo $row->name;
    //echo $row->user;
}
mysql_free_result($sql);
?>