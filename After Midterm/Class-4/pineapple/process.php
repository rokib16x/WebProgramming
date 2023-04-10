<?php 

$number =$_POST["number"];
$delivery_option =$_POST["delivery_option"];
$tip =$_POST["tip"];
$extra_salt =$_POST["extra_salt"];

$pineapple_price = 23.45;
$bill = $pineapple_price * $number;
// calculating the delivery cost
if ($delivery_option == 'yes') {
$bill +=45;
}

$bill += $tip;

if ($extra_salt == 'small') {
    $size_extra_cost = 1.05;
    $bill *=$size_extra_cost;
    } 
elseif ($extra_salt == 'medium') {
    $size_extra_cost = 1.1;
    $bill *=$size_extra_cost;
    } 
elseif ($extra_salt == 'large') {
    $size_extra_cost = 1.15;
    $bill *=$size_extra_cost;
    } 

echo $bill;

?>