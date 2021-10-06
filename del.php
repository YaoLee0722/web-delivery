<?php
if (!isset($_GET['id']) ) {
    echo "delete failed, please try again! <a href='./order.php'>back</a>";
    exit;
}

include "db.php";
$sql = "delete from ice_order  where id=".$_GET['id'];
mysqli_query($conn, $sql);


header("Refresh:0");
