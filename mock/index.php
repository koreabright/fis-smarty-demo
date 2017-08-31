<?php
require('./init.php');
$info = array(
	'text' => 'hello fis, hhhhh'
)
$smarty -> assign('info', $info);
$smarty -> display('index/index.tpl');
?>