<?php
session_start();

//Use the below $con command if you are deploying website using AWS RDS, EC2
$con=mysqli_connect("ecom-rds-db.cuk9snrq7ofi.us-east-1.rds.amazonaws.com","admin","96A6o5RXtgdAix3PCpxZ","ecom");

$redis = new Redis();
$redis->connect('ecom-rds-redis.u3zyu5.use1.cache.amazonaws.com', 6379);

//Use the below command if you want to run the website on Localhost i.e., XAMPP
// $con=mysqli_connect("localhost","root","","ecom");

define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/Electronix-Website/ecom/');

//Edit the IP address (127.0.0.1) with the Public IP address of your EC2 instance
define('SITE_PATH','http://127.0.0.1/Electronix-Website/ecom/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
