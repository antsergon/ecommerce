<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function () {

	/*echo "OK"; teste da classe sql
	$sql = new Hcode\DB\Sql();
	$results = $sql->select("SELECT * FROM tb_users");
	echo json_encode($results);
	**/

	$page = new Page();
	$page->setTpl("index"); //chama a pagina html
});

$app->get('/admin', function () {

	$page = new PageAdmin();
	$page->setTpl("index"); //chama a pagina html
});

$app->run(); //exibe no navegador
