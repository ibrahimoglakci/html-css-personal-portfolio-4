<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


#require_once ('connection/connection.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once("includes/link.php"); ?>
</head>
<body>

   <?php include_once("includes/navbar.php"); ?>

   <?php include_once("includes/home.php"); ?>
   <?php include_once("includes/about.php"); ?>
   <?php include_once("includes/services.php"); ?>
   <?php include_once("includes/portfolio.php"); ?>
   <?php include_once("includes/getintouch.php"); ?>
   <?php include_once("includes/testimonials.php"); ?>
   <!--<?php include_once("includes/blog.php"); ?>-->
   <?php include_once("includes/contact.php"); ?>

   <?php include_once("includes/footer1.php"); ?>
   <?php include_once("includes/footer2.php"); ?>

   
</body>
</html>

