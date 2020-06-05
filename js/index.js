
$(function(){
	$('#themo-ul li >span').click(theMe);
	$('#aclick > li >a').click(theMe);
	$('.m-b-b ul >li').click(comMent);
	$('#head-nav > a:nth-child(2) > span').click(Nav);
	$('#upPage').on('mouseover',function(){
		$(this).css({"color":"#fff","text-decoration":"none"});
		
	})
	$('#lowPage').on('mouseover',function(){
		$(this).css({"color":"#fff","text-decoration":"none"});
		
	})
	
});
//背景变化与字体    开始
function theMe(){
	var val = $(this).attr("value");
	//把变量存进cookie，避免页面刷新背景复原
	$.cookie('color',val,{expires : 7, path:'/'});
	if(val != "#f3f3f3"){
		$('.top').addClass('text-f');
		$('.head-nav > a').css('color','#fff');
		$('.bottom').addClass('text-f');
	}else{
		$('.top').removeClass('text-f');
		$('.head-nav > a').css('color','black');
		$('.bottom').removeClass('text-f');
	}
	$('body').addClass("theMe");
	$('body').css('background-color',val);
};
//背景变化与字体    结束
//点赞与评论    开始
function comMent(){
	alert('努力开发中~~~~~~~~~~');
	console.log(this);
}
function Nav(){
	alert('后台去泡妞了~~~~~~~·你别点了');
}
//点赞与评论    结束
function readyHtml(){
	var val = $.cookie('color');	
	if(!val){
		return;
	}
	$('body').css('background-color',val);
	console.log('1');
	if(val != "#f3f3f3"){
			$('.top').addClass('text-f');
			$('.head-nav > a').css('color','#fff');
			$('.bottom').addClass('text-f');
	}else{
			$('.top').removeClass('text-f');
			$('.head-nav > a').css('color','black');
			$('.bottom').removeClass('text-f');
	}
}