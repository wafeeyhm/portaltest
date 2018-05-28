<?php
session_start();
$sitename = explode("/", $_SERVER['REQUEST_URI']);

//print_r($sitename);
include_once($_SERVER['DOCUMENT_ROOT'] . "/" . $sitename[1] . "/function/global.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/" . $sitename[1] . "/lib/encryption.php");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?php echo WEB_ROOT; ?>img/favicon.ico">

<title>Signin</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo WEB_ROOT; ?>vendor/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo WEB_ROOT; ?>vendor/css/signin.css" rel="stylesheet">
</head>
<body>
<!-- Open container -->
<div class="container">