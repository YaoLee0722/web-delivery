<?php

$start_time = '11:00';
$end_time = '18:00';
$now_time  = date('H:i');
if( !($start_time<=$now_time && $end_time>=$now_time) ){
     echo "Sorry, it's not opening time. The shop is open daily 11a.m to 6p.m."." <a href='./cavallo.php'>back</a>";
     exit;
}

$id = $_GET['id'];
$price = $_GET['price'];
session_start();
include "db.php";
if (!isset($_SESSION['username'])) {
    echo "Please login first!"." <a href='./cavallo.php'>back</a>";
    exit;
}
$customerID =$_SESSION['username'].$_SESSION['phone'];
$parameters = json_encode(
    array(
      'storeID'=>'Team7',
      'customerID'=>$customerID,
      'date' => date("d/m/Y"),
      'time' => date("H:i"),
      'timeZone' => 'UTC',
      'transactionAmount' => $price,
      'currencyCode' => 'GBP'
    )
);
$post_data= $parameters;
$url = 'http://homepages.cs.ncl.ac.uk/daniel.nesbitt/CSC8019/HorsePay/HorsePay.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);//post
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
//echo $response;
$re = json_decode($response);
if ($re->paymetSuccess->Status) {

    $sql2 = "select product,price,size,customer_name,dispatch,phone,count from ice_order where id=".$id;
    $retrieve_feed_result = $conn->query($sql2);
    $result = $retrieve_feed_result->fetch_all();
    foreach ($result as $key=> $value) {
      $product = $value[0];
      $price = $value[1];
      $size = $value[2];
      $customer_name = $value[3];
      $dispatch = $_GET['address'];
      $phone = $value[5];
      $count = $value[6];
      $userid = $_SESSION['userid'];
      if (isset($_GET['collection']) && $_GET['collection']=='true') {
        $collection = 1;
      }else {
        $collection = 0;
      }
      if (isset($_GET['dairy_free']) && $_GET['dairy_free']=='true') {
        $dairy_free = 1;
      }else {
        $dairy_free = 0;
      }
      $arrive_time = "";
      if (isset($_GET['arrive_time'])) {
        if ($_GET['arrive_time'] == '1 hour') {
          $arrive_time = date('Y-m-d H:i:s',strtotime('+1 hour'));
        }else if ($_GET['arrive_time'] == '2 hours') {
          $arrive_time = date('Y-m-d H:i:s',strtotime('+2 hour'));
        }else if ($_GET['arrive_time'] == '3 hours or more') {
          $arrive_time = date('Y-m-d H:i:s',strtotime('+3 hour'));
        }
      }
      $sum = $price*$count;
      $sql3 = "insert into orders (customer_id,address,total,status,deleted,collection,arrive_time)values(".$userid.", '".$dispatch."',
      ".$sum.", 'Yet to be delivered', 0 ,".$collection.", '".$arrive_time."')";

      $conn->query($sql3);
      $oid = mysqli_insert_id($conn);
      $sql41 = "select id from items order by id desc limit 1";
      $retrieve_feed_result0 = $conn->query($sql41);
      $result0 = $retrieve_feed_result0->fetch_all();
      foreach ($result0 as $key0=> $value0) {
        $item_id = (int)$value0[0] +1;

        $sql4 = "insert into items (id, name, price, deleted, size,dairy_free)values(".$item_id.",'".$product."', ".$price.",0, '".$size."', ".$dairy_free.")";
        $conn->query($sql4);
        $oid2 = mysqli_insert_id($conn);
        $sql5 = "insert into order_details (order_id, item_id, quantity, price) values(".$oid.", ".$item_id.", ".$count.", ".$price.")";
        $conn->query($sql5);
        $sql = "update ice_order set ispay=1 where id=".$id;
        mysqli_query($conn, $sql);
        break;
      }
      break;
    }

    echo $re->paymetSuccess->reason." <a href='./order.php'>back</a>";
} else {
    echo $re->paymetSuccess->reason." <a href='./order.php'>back</a>";
}
curl_close($ch);
