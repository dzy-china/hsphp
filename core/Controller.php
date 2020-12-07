<?php
namespace core;
use core\View;
class Controller{
	
	//定义属性
	protected $View;
	
	//构造函数
	public function __construct(){
		$this->View=new View();
	}
	
	//指定模板文件
	public function view($file){
		return $this->View->view($file);
	}
	
	//指定模板变量
	public function assign($name,$value){
		return $this->View->assign($name,$value);
	}
}
