<?php
require("../php/beauty.php");
$arr = getBeautyUrl();
?>
<!DCOTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>贪婪</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/Original.css">
		<link rel="stylesheet" href="../css/index.css">
		<script src="../js/package/jquery-3.3.1.js"></script>
		<script src="../js/package/jquery.cookie.js"></script>
		<script src="../js/index.js"></script>
		<script>
			$(function(){
				readyHtml();
			});
			
		</script>
	</head>
	
	<body>	
		<div class="top">
			<div class="themo">
				<ul class="themo-ul" id="themo-ul">
					<li><span value="#480000">酒红</span></li>
					<li><span value="#383838">黑色</span></li>
					<li><span value="FF6699">少女</span></li>
					<li><span value="#f3f3f3">本色</span></li>
				</ul>
			</div>
			<div class="user">
				<a href="../main/login.html"><button type="button" class="btn btn-info">登陆</button></a>
				<button type="button" class="btn btn-info">注销</button>
				<img class="user-img"  src="../images/userimg/link.jpg"></img>
			</div>
		</div>
		<div class="head">
			<div class="layout">
				<nav class="head-nav" id="head-nav">
					<a href="duanzi-index.php"><span>搞笑段子</span></a>
					<a href="#"><span>搞笑图片</span></a>
					<a href="#"><span>美女图片</span></a>
					<a href="#"><span>壁纸</span></a>
				</nav>
			</div>
		</div>
		<?php if($arr):?>
		<?php foreach($arr[0] as $val):?>
		<div>
			<div class="layout">
				<div class="main-body">
					<div class="main-body-top">
						<ul>
							<li>
								<img class="main-user-img"  src="../images/userimg/link.jpg"></img>
								<span>小熊猫</span>
							</li>
							<li>
								<span>2020-03-13 22:26:02</span>
							</li>
						</ul>
					</div>
					<div class="main-body-content">
						<div class="m-b-c-img">
							<a><img src="<?php echo $val?>"/></a>
						</div>
					</div>
					<div class="m-b-b">
						<ul>
							<li>
								<svg class="bi bi-heart" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 01.176-.17C12.72-3.042 23.333 4.867 8 15z" clip-rule="evenodd"/>
								</svg>
							</li>
							<li>
								<svg class="bi bi-chat-dots" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M2.678 11.894a1 1 0 01.287.801 10.97 10.97 0 01-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 01.71-.074A8.06 8.06 0 008 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 01-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 00.244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 01-2.347-.306c-.52.263-1.639.742-3.468 1.105z" clip-rule="evenodd"/>
									<path d="M5 8a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0z"/>
								</svg>
							</li>
						</ul>	
					</div>

			</div>
			</div>
		</div>
		<?php endforeach?>
		<?php else:?>
			<div>
			<div class="layout">
				<div class="main-body">
					<div class="main-body-top">
						<ul>
							<li>
								<img class="main-user-img"  src="../images/userimg/link.jpg"></img>
								<span>小熊猫</span>
							</li>
							<li>
								<span>2020-03-13 22:26:02</span>
							</li>
						</ul>
					</div>
					<div class="main-body-content">
						<div class="m-b-c-text">
							<p>
								<?php echo "<span style='color:red ;'>这里什么都没有,数据获取失败</span>"?>
							</p>
						</div>
						<div class="m-b-c-img">
							<a><img src="../images/userimg/link.jpg"/></a>
						</div>
					</div>
					<div class="m-b-b">
						<ul>
							<li>
								<svg class="bi bi-heart" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 01.176-.17C12.72-3.042 23.333 4.867 8 15z" clip-rule="evenodd"/>
								</svg>
							</li>
							<li>
								<svg class="bi bi-chat-dots" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M2.678 11.894a1 1 0 01.287.801 10.97 10.97 0 01-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 01.71-.074A8.06 8.06 0 008 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 01-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 00.244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 01-2.347-.306c-.52.263-1.639.742-3.468 1.105z" clip-rule="evenodd"/>
									<path d="M5 8a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0z"/>
								</svg>
							</li>
						</ul>	
					</div>

			</div>
			</div>
		</div>
		<?php endif?>
		<div>
			<ul class="layout page" id="aclick">
			
				<li>
					<?php echo $arr[1]['upPage'];?>
				</li>
				<li>
					<?php echo $arr[1]['paging'];?>
				</li>
				<li>
					<?php echo $arr[1]['downPage'];?>
				</li>
				
			</ul>
		</div>
		<div class="bottom">
				  <ul class="layout bottom-ul">
					<li>
						<span>也</span>
					</li>
					<li>
						<span>不</span>
					</li>
					<li>
						<span>懂</span>
					</li>
					<li>
						<span>放</span>
					</li>
					<li>
						<span>啥</span>
					</li>
					
					<li>
						<span>！</span>
					</li>
				 </ul>
		</div>
	</body>
</html>

