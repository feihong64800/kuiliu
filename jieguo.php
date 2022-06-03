<?php


session_start();
require_once 'shuju.php';
if ($_SESSION["iid"] <> ""){
	
echo "你购买的商品是：";
echo $shuju[$_SESSION["iid"]][1];
echo "网盘地址是：";
echo $shuju[$_SESSION["iid"]][3];
echo "提取码是：";
echo $shuju[$_SESSION["iid"]][4];}

//$mingzi=$shuju[$_SESSION["iid"]][1];
//echo $jiaqian;
//echo $mingzi;

?>
