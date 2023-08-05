<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=$assetsBaseUri?>css/style.css">
	<link rel="icon" type="image/gif" href="images/cupcake-couleur.gif" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Raleway&family=Ysabeau+Infant&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?=$assetsBaseUri?>Trumbowyg-main/Trumbowyg-main/dist/ui/trumbowyg.min.css">
	<style>
		body{
			<?php if(isset($viewData["body-class-name"])){?>
					background-image: var(--gradient-recipe), url(<?= $recipe->getPicture() ?>);
			<?php } else { ?>
				background-image: var(--gradient), url(<?=$assetsBaseUri?>images/_7b5c2d4b-a7a4-4c13-80f3-233223c91ae8.jpg);
			<?php } ?>
		}
		
	</style>

	<title>Le cupcake enchanté</title>
</head>

<body class="<?php if(isset($viewData["body-class-name"])){ echo $viewData["body-class-name"];}?>">
	<header>
        <?php 
		
		require_once __DIR__ . "/../partials/nav.tpl.php"?>
		<?php
		var_dump($categoryb);
		?>
    </header>