<?php
#要执行多页查询，如果没有传值赋值第一页

function getHtml($con,$total,$pageNum){
	$sql = "select count(*) from `duanzi`";
	#如果查询无结果就return
	if(!$query = $con->query($sql)){return};
	return $query->fetch_row();
}


function getCon(){
	$con = new mysqli('127.0.0.1','root','123456','main');
	#遇到错误返回
	if(mysqli_connect_errno()){
		return;
	}
	$con->set_charset("utf8");
	return $con;
}
function getPage(){
	$pageNum = $_GET['page']??1;
	$total = 3;
	$con = getCon();
	$sql = 'select content from `duanzi` limit '.($pageNum-1)*$total.' ,'.$total;
	echo $sql;
	if($query = $con-> query($sql)){
		$html = getHtml($con,$total,$pageNum);
		return [$query,$html];
	}
}