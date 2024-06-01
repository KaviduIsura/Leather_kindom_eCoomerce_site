<?php 
$amount=3000;
$merchant_id=1225297;
$order_id=uniqid();
$merchant_secret="MzQzMDcyMzk0MTI0NzY3OTI0NzQ2MjQ2OTk4MDAxMzM4MzY0NzE4";
$currency="LKR";

$hash = strtoupper(
  md5(
      $merchant_id . 
      $order_id . 
      number_format($amount, 2, '.', '') . 
      $currency .  
      strtoupper(md5($merchant_secret)) 
  ) 
);
$array=[];
$array['item'] = "divnin";
$array["first_name"] = "dffdiu";
$array["last_name"] = "rgikn";
$array["email"] = "iniiuijui";
$array["phone"] = "9778";
$array["address"] = "ubuu";
$array["city"] = "inuhyyi";
$array['amount']= $amount;
$array['merchant_id'] = $merchant_id;
$array['order_id']=$order_id;
$array['currency']=$currency;
$array['hash']=$hash;

$jsonObj = json_encode($array);

echo $jsonObj;
?>