<?php
	use \Core\Route;
	
	if (isset($_POST["add"])) {
    	return [new Route('/tree/', 'tree', 'addBranch')];
    }
	if (isset($_POST["upd"])) {
    	return [new Route('/tree/', 'tree', 'updBranch')];
    }
	if (isset($_POST["del"])) {
    	return [new Route('/tree/', 'tree', 'delBranch')];
    }
	return [
		new Route('/hello/', 'hello', 'index'), // проверка подключения к бд
		new Route('/tree/', 'tree', 'index'), // роут для приветственной страницы 
		new Route('/auth/', 'auth', 'auth'), // роут для авторизации админа
	];
	
