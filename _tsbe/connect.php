<?php
 $db_host = "localhost";
 $db_user = "root";
 $db_passwort = "gibbiX12345;
 $db_name = "myfriends";
mysql_connect("$db_host","$db_user","$db_passwort") or die
 ("Keine Verbindung moeglich");
mysql_select_db("$db_name") or die ("Die Datenbank existiert nicht.");
?>
