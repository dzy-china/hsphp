<?php
namespace core;
class View{
	
	protected $file;
	protected $val=[];
	
	//指定模板文件
	public function view($file){
		$this->file="view/" . $file .".html";
		return $this;
	}
	
	//指定模板变量
	public function assign($name,$value){
		$this->val[$name]=$value;
		return $this;
	}
	
	//echo当前对象时的魔术方法
	public function __toString(){
		extract($this->val);
		include $this->file;
		return '';
	}
}
