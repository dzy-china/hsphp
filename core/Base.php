<?php
namespace core;
class Base{
	public static function run(){
		echo self::parseUrl();
	}
	
	
	public static function parseUrl(){
		if(isset($_GET['s'])){
			$path_info=explode('/',$_GET['s']);
			$class="\web\controller\\" . ucfirst($path_info[0]);
			$action=$path_info[1];
		}else{
			$class="\web\controller\\Index";
			$action="Index";
		}
		return (new $class)->$action();
	}
}
