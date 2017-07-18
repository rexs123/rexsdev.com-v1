<?php
$birthDate = "04/11/1998";
//explode the date to get month, day and year
$birthDate = explode("/", $birthDate);
//get age from date or birthdate
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y") - $birthDate[2]) - 1) : (date("Y") - $birthDate[2]));
$source = $_GET['s'];
$server = 'localhost';
$user = 'rexsdev_sources';
$pass = '-d&Mz!H^b.Np';
$db = 'rexsdev_sources';
$mysqli = new mysqli($server, $user, $pass, $db);
if(!@empty($_SERVER['HTTP_REFERER'])){
    $Origin = parse_url($_SERVER['HTTP_REFERER'])['host'];
    if ($stmt = $mysqli->prepare("INSERT INTO `visitors` (`referer`) VALUES ('" . $Origin . "') ON DUPLICATE KEY UPDATE `hits` = `hits` + 1")) {
			$stmt->execute();
			$stmt->close();
		}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Rexs Development &amp; Design </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta name="keywords" content="rexs, rexs123, rexs183, rexsdev, develpment, web, design, web design, web development, system, linux, mysql, design development, app, dev, graphics, flat, material">
		<meta name="description" content="Rexs Development &amp; Design; freelance web design and development out of Toronto, Canada..">

		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.rexsdev.com">
		<meta property="og:site_name" content="Rexs Development">
		<meta property="og:description" content="Rexs Development &amp; Design a web design and develpment company.">
		<meta property="og:locale" content="en-US">

		<meta name="twitter:domain" content="rexsdev.com">
		<meta name="twitter:url" content="https://www.rexsdev.com">
		<meta name="twitter:description" content="Professional Web Design Development Company">
		<meta name="twitter:site" content="@rexs183">

		<meta name="robots" content="index,follow,noodp,noydir">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,300i,400,400i,600,700|Product+Sans:300,400,400i,700,700i" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=" crossorigin="anonymous" />

		<link href="https://rexsdev.com/assets/css/responsive.min.css" rel="stylesheet">
		<link href="https://rexsdev.com/assets/css/style.min.css" rel="stylesheet">
		<link href="https://rexsdev.com/assets/css/rexsdev.min.css" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="57x57" href="https://rexsdev.com/assets/img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="https://rexsdev.com/assets/img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="https://rexsdev.com/assets/img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="https://rexsdev.com/assets/img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="https://rexsdev.com/assets/img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="https://rexsdev.com/assets/img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="https://rexsdev.com/assets/img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="https://rexsdev.com/assets/img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="https://rexsdev.com/assets/img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="https://rexsdev.com/assets/img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="https://rexsdev.com/assets/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="https://rexsdev.com/assets/img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="https://rexsdev.com/assets/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="https://rexsdev.com/assets/img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="https://rexsdev.com/assets/img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	</head>
<body>
