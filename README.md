# hsphp
**一个 PHP 开发框架**

```html
使用方式：
一、模板使用：
模板统一放在"view"目录下

二、控制器使用：
//指定输出变量
$this->assign('version','1.0');
//指定输出模板
return $this->view("index"); //注：view\index.html
```

