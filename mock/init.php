<?php
	include_once("../libs/Smarty.class.php"); //包含smarty类文件
	$smarty = new Smarty(); //建立smarty实例对象$smarty
	$smarty->caching=false; //开发是不建议开启缓存
	$smarty->template_dir="./template";  //设置模板目录
	$smarty->compile_dir="./template_c";  //设置编译目录
	$smarty->cache_dir="./cache";  //缓存文件夹
	$smarty->cache_lifetime=60;
	$smarty->left_delimiter = "{%";  //左定界符
	$smarty->right_delimiter = "%}"; //右定界符
?>