<?php
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    echo "Confirm failed, please try again! <a href='./login.php'>back</a>";
    exit;
}

include "db.php";
$sql = "select contact,postcode,id from users where name='".$_POST['username']."' and password='".$_POST['password']."'";
$retrieve_feed_result = $conn->query($sql);
$result = $retrieve_feed_result->fetch_all();
if (count($result) > 0) {
  session_start();

  $_SESSION['username'] = $_POST['username'];
  $_SESSION['phone'] = $result[0][0];
  $_SESSION['address'] = $result[0][1];
  $_SESSION['userid'] = $result[0][2];
  header("Location: ./cavallo.php#Address?msg=success");
  exit;
} else {
  //var_dump($result);
  echo "Confirm failed, please try again! <a href='./login.php'>back</a>";
  exit;
}
