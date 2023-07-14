<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=$assetsBaseUri?>css/style.css">
	<link rel="icon" type="image/gif" href="images/logo 3.gif" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Raleway&family=Ysabeau+Infant&display=swap" rel="stylesheet">

	<title>Le cupcake enchanté</title>
</head>
<body class="<?php if(isset($viewData["body-class-name"])){ echo $viewData["body-class-name"];}?>">
	<header>
        <?php 
		
		require_once __DIR__ . "/../partials/nav.tpl.php"?>
    </header>