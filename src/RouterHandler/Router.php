<?php

namespace Morainstein\Mvc\RouterHandler;


class Router
{
	static private $getRoutes = [];
	static private $postRoutes = [];

    static public function get(string $path, array $arrai)
	{

		$route = new Route($arrai[0], $arrai[1]);

		self::$getRoutes[$path] = $route;
	}

	static public function post(string $path, array $arrai)
	{

		$route = new Route($arrai[0], $arrai[1]);

		self::$postRoutes[$path] = $route;
	}

	static public function realize()
	{
		if($_SERVER['REQUEST_METHOD'] === 'GET') {
			$routes = self::$getRoutes;

		} else if($_SERVER['REQUEST_METHOD'] === 'POST') {
			$routes = self::$postRoutes;
			
		} else {
			http_response_code(405);
			return;
		}

		
		$path = $_SERVER['PATH_INFO'] ?? '/';
		
		if(!array_key_exists($path, $routes)){
			http_response_code(404);
		} else {

			$routes[$path]->realize();
		}
	}
}