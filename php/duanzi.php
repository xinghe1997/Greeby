<?php
#要执行多页查询，如果没有传值赋值第一页

function getHtml($con,$total,$pageNum){
	$num = $pageNum;
	$sql = "select count(*) from `duanzi`";
	$query = $con->query($sql);
	if(!$query){return;}
	$arrNum = $query->fetch_row()[0];
	#获取总页数
	$maxPage = ceil($arrNum/$total);
	$arrHtml = array('上一页'=>'1','总数'=>2,'下一页'=>3);
	// var_dump($pageNum);
	$pageNum--;
	if($pageNum <= 1){
		$arrHtml['上一页'] = "<a href='javascript:void(0)'>上一页</a>";
	}else{
		$arrHtml['上一页'] = "<a href='http://lixisong.com/%e8%b4%aa%e5%a9%aa/main/duanzi-index.php?page={$pageNum}'>上一页</a>";
	}
	$arrHtml['总数'] = ($pageNum+1).'/'.$maxPage;
	#判断是不是最大页
	if($pageNum == ($maxPage-1)){
		$arrHtml['下一页'] = "<a href='javascript:void(0)'>下一页</a>";
	}else{
		$pageNum+=2;
		$arrHtml['下一页'] = "<a href='http://lixisong.com/%e8%b4%aa%e5%a9%aa/main/duanzi-index.php?page={$pageNum}'>下一页</a>";
	}
	return $arrHtml;
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
	if(empty($_GET['page'])){
		$pageNum = 1;
	}else{
		$pageNum = (int)$_GET['page'];
	}
	$total = 4;
	$con = getCon();
	$sql = 'select content from `duanzi` limit '.($pageNum-1)*$total.' ,'.$total;
	if($query = $con-> query($sql)){
		
		$html = getHtml($con,$total,$pageNum);
		return [$query,$html];
	}
}