filterCity();
function filterCity(){
	var hlStoreSelector = $('.hl-store-selector'),
		hlTabCity = $('.hl-tab-city'),
		hlTabContent = $('.hl-tab-content'),
		hlText = $('.hl-text'),
		hlAddress = [];

	hlStoreSelector.hover(function(event) {
		$(this).addClass('hl-open');
		hlText.addClass('hl-active');
	}, function() {
		$(this).removeClass('hl-open');
	});

	hlTabCity.find('li').on('click', function(){
		var i = $(this).index();
		$(this).addClass('hl-curr hl-active').siblings().removeClass('hl-curr hl-active');
		hlTabContent.find('.hl-panel').eq(i).addClass('hl-active').siblings().removeClass('hl-active');
	});
	hlTabContent.find('a').on('click', function(){
		var hlAddressPlacement = $('.hl-address-placement'),
			hltxt = '';

		$(this).addClass('hl-on').parent().siblings().find('a').removeClass('hl-on');
		hlAddress.push($(this).text());

		for(var i = 0; i<hlAddress.length; i++){
			hltxt +=  hlAddress[i] + "&nbsp;";
		}
		
		hlAddressPlacement.html(hltxt);
	});
}
(function(){
	var hlBuyCount = $('.hl-buy-count'),
		hlBuyNum = hlBuyCount.find('.hl-buy-num'),
		hlMinus = hlBuyCount.find('.hl-minus'),
		hlPlus = hlBuyCount.find('.hl-plus'),
		count = 1;
	
	hlBuyNum.blur(function(){
		var hlval = $(this).val();
		if(parseInt(hlval) === 0 || hlval === ''){
			$(this).val(count);
		}
	});
	hlPlus.on('click', function(){
		count++;
		hlBuyNum.val(count);
		hlMinus.removeClass('hl-minus-disable');
	});
	hlMinus.on('click', function(){
		count--;
		hlBuyNum.val(count);
		if(count === 0){
			count = 1
			hlBuyNum.val(count);
			hlMinus.addClass('hl-minus-disable');
		}
	});
})();

tabTrigger();
function tabTrigger(){
	var hlTabTrigger = $('.hl-tab-trigger'),
		hlProductContainer = $('.hl-product-container');

	hlTabTrigger.find('li').on('click', function(){
		var i = $(this).index();
		$(this).addClass('hl-selected').siblings().removeClass('hl-selected');
		hlProductContainer.find('.hl-tab-con-item').eq(i).addClass('hl-curr').siblings().removeClass('hl-curr');
	});
}

//鼠标经过预览图片函数
preview();
function preview(){
	var hlPreview = $('.hl-preview'), hlImg = hlPreview.find('li img');

	hlImg.mousemove(function(){
		$("#preview .hl-zoom img").attr("src",$(this).attr("src"));
		$("#preview .hl-zoom img").attr("zoom-img",$(this).attr("hl-bimg"));
	});
	
}

//图片放大镜效果
$(function(){
	$(".hl-zoom").zoom({
		xzoom: 400,
		yzoom: 400
	});
});
//图片预览小图移动效果,页面加载时触发
$(function(){
	var tempLength = 0; //临时变量,当前移动的长度
	var viewNum = 5; //设置每次显示图片的个数量
	var moveNum = 2; //每次移动的数量
	var moveTime = 300; //移动速度,毫秒
	var scrollDiv = $(".hl-spec-scroll .hl-items ul"); //进行移动动画的容器
	var scrollItems = $(".hl-spec-scroll .hl-items ul li"); //移动容器里的集合
	var moveLength = scrollItems.eq(0).width() * moveNum; //计算每次移动的长度
	var countLength = (scrollItems.length - viewNum) * scrollItems.eq(0).width(); //计算总长度,总个数*单个长度
	  
	//下一张
	$(".hl-spec-scroll .hl-next").on("click",function(){
		if(tempLength < countLength){
			if((countLength - tempLength) > moveLength){
				scrollDiv.animate({left:"-=" + moveLength + "px"}, moveTime);
				tempLength += moveLength;
			}else{
				scrollDiv.animate({left:"-=" + (countLength - tempLength) + "px"}, moveTime);
				tempLength += (countLength - tempLength);
			}
		}
	});
	//上一张
	$(".hl-spec-scroll .hl-prev").on("click",function(){
		if(tempLength > 0){
			if(tempLength > moveLength){
				scrollDiv.animate({left: "+=" + moveLength + "px"}, moveTime);
				tempLength -= moveLength;
			}else{
				scrollDiv.animate({left: "+=" + tempLength + "px"}, moveTime);
				tempLength = 0;
			}
		}
	});
});