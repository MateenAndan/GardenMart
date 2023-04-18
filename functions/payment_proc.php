<?php
include("../settings/core.php");
require("../controllers/global_controller.php");

session_start();
$cid = $_SESSION['customer_id'];

$email = $_POST['email'];
$amount = $_POST['amounts'];

echo "$cid";

$url = "https://api.paystack.co/transaction/initialize";
$fields = [
   'email' => $_GET['email'],
   'amount' => $_GET['amount']
];
$fields_string = http_build_query($fields);
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt(
   $ch,
   CURLOPT_HTTPHEADER,
   array(
      "Authorization: Bearer sk_test_372a36a6617f205b000d2dd689dad56267256071",
      "Cache-Control: no-cache",
   )
);

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute post
$result = curl_exec($ch);
echo $result;

if ($result == true) {
   //save transaction in order table
   $ino = mt_rand();
   $customer_id = get_id();
   $ostatus = 'Success';
   $odate = date('Y-m-d');
   $order = order_ctr($customer_id, $ino, $odate, $ostatus);

   if ($order) {
      echo "sucess 1";
   } else {
      echo "fail 1";
   }

   //save payment details
   $order_id = order_id_ctr($ino);
   $order_id = $order_id['order_id'];
   $amt = $_GET['amount'];
   $currency = 'GHS';
   $payment = payment_ctr($amt, $customer_id, $order_id, $currency, $odate);
   if ($payment) {
      echo "sucess 2";

      // Save order details
      $cart_items = view_cart_ctr($customer_id);

      foreach ($cart_items as $item) {
         $product_id = $item['product_id'];
         $qty = $item['qty'];

         $inserted = insert_order_details_ctr($order_id, $product_id, $qty);

         if (!$inserted) {
            echo "Error inserting order details for product: $product_id";
            break;
         }
      }

   } else {
      echo "fail 2";
   }

   // Fetch cart items for the customer
   $cart_items = get_all_cart_items_ctr($c_id); // Replace this with the appropriate function to fetch all cart items for the customer

   // Save order details for each cart item
   foreach ($cart_items as $item) {
      $product_id = $item['product_id'];
      $qty = $item['qty'];
      $insert_order_details = insert_order_details_ctr($order_id, $product_id, $qty);

      if (!$insert_order_details) {
         // Handle the case where inserting order details failed
         echo "fail inserting order details for product_id: $product_id";
      }
   }

}