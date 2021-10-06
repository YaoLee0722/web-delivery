<?php

$debug = false;
$db_host = "localhost:3306";
$db_username = "Cavallo";
$db_password = "Cavallo,123";
$db_name = "cavallo";

$conn = new mysqli ($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die ("Error connecting to the DB.<br>" . $db->connect_error);
}
/* For debug purposes only. This is otherwise not required. */
else {
    if ($debug) {
        echo "Connected!";
    }
}
