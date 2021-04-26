<?php
	include_once("helpers/url.php");
	include_once("dados/categorias.php");
	include_once("dados/posts.php");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0s">
	<title> Blog Dev</title>
	<!-- Google fonts -->
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<header>
		<a href="<?= $BASE_URL ?>" id="logo">
			<img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Dev">
		</a>
		<nav>
			<ul id="navbar">
				<li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
				<li><a href="#" class="nav-link">Categorias</a></li>
				<li><a href="#" class="nav-link">Sobre</a></li>
				<li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
			</ul>
		</nav>
	</header>