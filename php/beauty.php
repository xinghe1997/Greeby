<?php

//链接数据库
function getConnect(){
	$mysqli = new mysqli('127.0.0.3','root','123456','main');
	if (mysqli_connect_errno()) {
		printf("链接失败");
		exit();
}
	return $mysqli;
}
//读取数据
function getBeautyUrl(){
	$nowPage = $_GET['page'] ?? 1;
	$arr =array();
	$numPage = 3;
	$mysqli = getConnect();
	$num = ($nowPage - 1) * $numPage;
	
	$sql = "select * from `beauty` limit  {$num},{$numPage}";
	

	if($result = $mysqli->query($sql)){
		while($row = $result->fetch_array()){
			$arr[] = $row[1];
		}
	}else{
		return false;
	}
	
	$htmlArr = getHtml($mysqli,$nowPage,$numPage);
	return [$arr,$htmlArr];
}
//设置返回按钮
function getHtml($mysqli,$nowPage,$numPage){
	$num = 0;
	#去查数据总数
	$sql = "select count(*) from `beauty`";
	
	$result = $mysqli->query($sql);
	$count = $result->fetch_row()[0];
	#设置三个变量用来返回
	$upPage = "<a href='javascript:void(0)'>上一页</a>";
	$maxPage = ceil(($count/$numPage));
	$paging = $nowPage."/".$maxPage;
	$downPage = "<a href='javascript:void(0)'>下一页</a>";
	#判断当前是哪一页
	if($nowPage > 1){
		$num = $nowPage - 1;
		$upPage = "<a href='http://lixisong.com/Greeby/main/beauty-index.php?page={$num}' id='upPage'>上一页</a>";
	}
	if($nowPage < $maxPage){
		$num = $nowPage + 1;
		$downPage = "<a href='http://lixisong.com/Greeby/main/beauty-index.php?page={$num}' id='lowPage'>下一页</a>";
	}
	return ['upPage' => $upPage,'downPage' => $downPage,'paging' => $paging];
}
?>





