<?php require_once '../Pagination.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>page</title>
</head>
<style type="text/css" media="screen">
	ul{
		list-style: none;
	}
	ul:after{
		clear: both;
	}
	ul li{
		background: #dddddd;
		width: 35px;
		height: 30px;
		line-height: 30px;
		float: left;
		text-align: center;
		margin-right: 1px;
	}
	a{
		text-decoration: none;
	}
	ul li.active{
		color:white;
		background: blue;
	}
	.active a{
		color:white;
	}
	
</style>
<body>
	<?php 
	$config = [
	'total' => 167, 
	'limit' => 7,
	'full' => true,
	'querystring' => 'trang'
	];
	$page = new Pagination($config);
	echo $page->getPagination();
	?>
</body>
</html>