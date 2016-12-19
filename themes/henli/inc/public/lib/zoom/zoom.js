(function($){
	$.fn.zoom = function(options){
		var settings = {
				xzoom: 200,	// 设置zoom元素的宽度
				yzoom: 200,	// 设置zoom元素的高度
				offset: 10,	// 设置zoom元素的距离左边的偏移位
				position: "right", //zoomed div default position,offset position is to the right of the image
				lens: 1, // zooming lens over the image,by default is 1;
				preload: 1
			};

			if(options) {
				$.extend(settings, options);
			}

			var noalt='';
			$(this).hover(function(){

				var imageLeft = this.offsetLeft;
				var imageRight = this.offsetRight;
				var imageTop = $(this).get(0).offsetTop;
				var imageWidth = $(this).children('img').get(0).offsetWidth; // 小图片宽度
				var imageHeight = $(this).children('img').get(0).offsetHeight; // 小图片高度

				noalt = $(this).children("img").attr("alt");

				var bigimage = $(this).children("img").attr("zoom-img");

				$(this).children("img").attr("alt",'');

				if($(".hl-zoom-con").get().length == 0){
					$(this).after("<div class='hl-zoom-con'><img class='bigimg' src='" + bigimage + "'/></div>");
					$(this).append("<div class='hl-zoom-pup'>&nbsp;</div>");
				}

			if(settings.position == "right"){
				if(imageLeft + imageWidth + settings.offset + settings.xzoom > screen.width){
					leftpos = imageLeft  - settings.offset - settings.xzoom;
				}else{
					leftpos = imageLeft + imageWidth + settings.offset;
				}
			}else{
				leftpos = imageLeft - settings.xzoom - settings.offset;
				if(leftpos < 0){
					leftpos = imageLeft + imageWidth  + settings.offset;
				}
			}

			$(".hl-zoom-con").css({ top: imageTop,left: leftpos });
			$(".hl-zoom-con").width(settings.xzoom);
			$(".hl-zoom-con").height(settings.yzoom);
			$(".hl-zoom-con").show();
			if(!settings.lens){
				$(this).css('cursor','crosshair');
			}

			$(document.body).mousemove(function(e){
				mouse = new MouseEvent(e);
				var bigwidth = $(".bigimg").get(0).offsetWidth;
				var bigheight = $(".bigimg").get(0).offsetHeight;
				var scaley ='x';
				var scalex= 'y';

				if(isNaN(scalex)|isNaN(scaley)){

					var scalex = (bigwidth/imageWidth);
					var scaley = (bigheight/imageHeight);					

					$(".hl-zoom-pup").width((settings.xzoom)/scalex );
					$(".hl-zoom-pup").height((settings.yzoom)/scaley);
					if(settings.lens){
						$(".hl-zoom-pup").css('visibility','visible');
					}
				}
				xpos = mouse.x - $(".hl-zoom-pup").width()/2 - imageLeft;
				ypos = mouse.y - $(".hl-zoom-pup").height()/2 - imageTop ;
				if(settings.lens){
					xpos = (mouse.x - $(".hl-zoom-pup").width()/2 < imageLeft ) ? 0 : (mouse.x + $(".hl-zoom-pup").width()/2 > imageWidth + imageLeft ) ?  (imageWidth -$("div.hl-zoom-pup").width() -2)  : xpos;
					ypos = (mouse.y - $(".hl-zoom-pup").height()/2 < imageTop ) ? 0 : (mouse.y + $(".hl-zoom-pup").height()/2  > imageHeight + imageTop ) ?  (imageHeight - $("div.hl-zoom-pup").height() -2 ) : ypos;
				}

				if(settings.lens){
					$(".hl-zoom-pup").css({ top: ypos,left: xpos });
				}

				scrolly = ypos;
				$(".hl-zoom-con").get(0).scrollTop = scrolly * scaley;
				scrollx = xpos;
				$(".hl-zoom-con").get(0).scrollLeft = (scrollx) * scalex ;

			});
		    },function(){

               $(this).children("img").attr("alt",noalt);
		       $(document.body).unbind("mousemove");
		       if(settings.lens){
		       $(".hl-zoom-pup").remove();
		       }
		       $(".hl-zoom-con").remove();

		    });

        count = 0;

		if(settings.preload){
			$('body').append("<div style='display:none;' class='hl-preload"+count+"'>sdsdssdsd</div>");
			$(this).each(function(){
				var imagetopreload = $(this).children("img").attr("zoom-img");
				var content = $('.hl-preload'+ count +'').html();

				$('.hl-preload' + count + '').html(content+'<img src=\"'+imagetopreload+'\">');
			});
		}
	}
})(jQuery);

function MouseEvent(e) {
	this.x = e.pageX;
	this.y = e.pageY;
}