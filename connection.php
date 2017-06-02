<?php

$host = "host=127.0.0.1";
$port = "port=128";
$dbname = "dbname=accList";
$credentials = "username= dip password = mjsnkx";

$db=pg_pconnect($host, $port, $dbname, $credentials);

if (!$db) {
	echo "Connection failed";
}

else{

echo "Connection established";
}

?>