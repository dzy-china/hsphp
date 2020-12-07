<?php
namespace web\controller;
use core\Controller;
class Index extends Controller{
	public function index(){
		$this->assign('version','1.0');
		return $this->view("index");
	}
	
	
}

