<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/project/webroot/style.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>
<body>
	<header>
	<h1 class="text-3xl text-white bg-blue-300 px-4 ">"Древо"</h1>
	<?php if (isset($_SESSION["user"])){ ?>
		<div class="text-2xl bg-blue-300 px-4 pb-4  flex flex-wrap ">
			<h1 class=" text-blue-900 bg-white   pb-8 hover:bg-blue-100">Администратор</h1>
			<form method="POST">
			<button name="exit" class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded" type="submit">
            	Выход из Админки
        	</button>
			</form>
		</div>
		<?php }else{?>
			<div class="text-2xl bg-blue-300 px-4 pb-4  flex flex-wrap ">
			<a href="/auth/" class=" text-blue-900 bg-white   pb-8 hover:bg-blue-100">Авторизация</a>
		</div>
	<?php } ?>
	</header>
		<?= $content ?>
	<footer>
	</footer>
</body>
<script src='/project/public/script.js'></script>
</html>
