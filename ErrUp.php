<?php
  header("content-type:text/html;charset=utf-8");
  header('Access-Control-Allow-Origin:*');
  
  //header('Content-Type:application/json');
  //echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

  echo "errorcode:".$_POST['errorcode']."<br>";
  echo "message:".$_POST['message']."<br>";
  echo "MACaddress:".$_POST['MACaddress']."<br>";
  echo "M_Tag:".$_POST['M_Tag']."<br>";
?>
