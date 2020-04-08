$(function(){
	$('.themo-ul li >span').click(theMe);
	$('.m-b-b ul >li').click(comMent);
});
//背景变化与字体    开始
function theMe(){
	var val = $(this).attr("value");
	if(val != "#f3f3f3"){
		$('.top').addClass('text-f');
		$('.head-nav > a').css('color','#fff');
		$('.bottom').addClass('text-f');
	}else{
		$('.top').removeClass('text-f');
		$('.head-nav > a').css('color','black');
		$('.bottom').removeClass('text-f');
	
	}
	$('body').addClass('theMe');
	$('body').css('background-color',val);
};
//背景变化与字体    结束
//点赞与评论    开始
function comMent(){
	alert('努力开发中');
}
//点赞与评论    结束
