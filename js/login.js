$(function(){
	//保存地址
	var files = ["../images/wallpaper/1.jpg","../images/wallpaper/2.jpg","../images/wallpaper/3.jpg","../images/wallpaper/4.jpg"];
	//获取两个div
	var div1 = $('.wall-1');
	var div2 = $('.wall-2');
	//计数
	//var divnum = 'hover';
	//数组下标
	var sum = 1;
	
	//添加样式

		//定义定时器
		setInterval(function(){
			//随机数,获取缩放
				var num = parseInt(Math.random()*2);
				var type = num == 1? 'zoom':'danhua';
				var divnum = zoom(div1,div2,type);
				if(divnum == 1){
					setTimeout(function(){
						sum >= files.length-1? sum = 0: sum++; 
						div1
						.removeClass(type)
						.css({'z-index':1,'background':'url('+files[sum]+')'})
						.css("background-repeat",'no-repeat')
						.css("background-size",'cover');
						div2.css('z-index',2);
					},5000);
				}else if(divnum == 2){
					setTimeout(function(){
						sum >= files.length-1? sum = 0: sum++; 
						div2
						.removeClass(type)
						.css({'z-index':1,'background':'url('+files[sum]+')'})
						.css('z-index',1)
						.css("background-repeat",'no-repeat')
						.css("background-size",'cover');
						div1.css('z-index',2);
					},5000);
				}
				
					//div2.css('z-index',2);
				
				
		},8000);
		
});
//缩放
function zoom(div1,div2,type){
	if(div1.css('z-index') == 2){
		div1.addClass(type);
		return 1;
	}else if(div2.css('z-index') == 2){
		div2.addClass(type);
		return 2;
	}
	
	
}