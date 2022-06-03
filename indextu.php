
<?php


$iid=$_GET['iid'];
//echo  $iid;
session_start();
$_SESSION["iid"]=$iid;
echo $_SESSION['iid'];
require_once 'shuju.php';
$jiaqian=$shuju[$_SESSION["iid"]][2];
$mingzi=$shuju[$_SESSION["iid"]][1];
//echo $jiaqian;
//echo $mingzi;

?>


<?php include_once 'lib/data.php';?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<title><?php echo $pay_config['title'];?></title>
<meta name="keywords" content="<?php echo $pay_config['keywords'];?>">
<meta name="description" content="<?php echo $pay_config['describe'];?>">
<link rel="shortcut icon" href="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $pay_config['qq'];?>&s=100">
<meta itemprop="image" content="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $pay_config['qq'];?>&s=100">
<link rel="stylesheet" type="text/css" href="<?php echo $domain;?>public/style.css" />
<script src="<?php echo $domain;?>public/jquery.min.js"></script>
</head>
<body>


<div class="web">
	<div class="container">
		<!--头部信息-->
		<header class="header">
		    <div class="header-logo">
			    <div class="portrait"><img src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $pay_config['qq'];?>&s=640" alt="<?php echo $pay_config['title'];?>"></div>
				<div class="synopsis">
				    <a href="<?php echo $domain;?>" title="LOGO"><?php echo $pay_config['name'];?></a>
					<div class="des"><?php echo $pay_config['qqinfo'];?></div>
				</div>
			</div>
			<div class="header-default">
			    <form action="<?php echo $domain;?>query.php?action=pay" method="post">
				    <div class="group">
					    <label>商品价格</label>
						<input type="text" name="money" value="<?php echo $jiaqian; ?>" readonly="readonly" required>

					</div>
					<div class="group">
					    <label>商品名称</label>
						<input type="text" name="des" value="<?php echo $mingzi; ?>" required>
					</div>
					<button type="submit" id="submit">确认订单</button>
				</form>
			</div>
		</header>		
	</div>
	<div class="footer">
	    <p><a href="http://beian.miit.gov.cn" target="_blank" rel="nofollow">粤ICP备123456号</a><a href="https://lanyou.vip/" target="_blank">技术：蓝优</a></p>
		<p>Copyright © 2020 <a href="<?php echo $domain;?>"><?php echo $pay_config['name'];?></a></p>

		
		
	</div>
</div>
	

	
	
<script>
$('#submit').click(function (){
	var money = $("input[name=money]").val();
	var reg = /^[0-9]*[0-9](.[0-9]{0,2})?$/;
	if (!reg.test(money)||money == 0){
		alert("请输入正确赏金");
		return false;
	}
	if (money > 1000){
		alert("赏金不能大于1000噢");
		return false;
	}
	return true;
});
</script>
</body>
</html>