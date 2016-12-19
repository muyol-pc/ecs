filter();
function filter(){
	var hlMultiple = $('.hl-multiple'),
		hlExt = $('.hl-ext'),
		hlCancel = $('.hl-cancel'),
		hlGroup = $('.hl-v-group'),
		hlConfirm = $('.hl-confirm');

	hlExt.find('a').on('click', function(){
		$(this).parent().parent().addClass('hl-all-more').siblings().removeClass('hl-all-more');
		hlGroup.find('a').each(function(){
			this.off = true;
			$(this).on('click', function(){
				return false;
			});
		});
	});

	hlCancel.on('click', function(){
		$(this).parent().parent().parent().removeClass('hl-all-more');
		hlGroup.find('a').each(function(i){
			$(this).removeClass('hl-selected');
			hlConfirm.addClass('disabled');
			if(this.off){
				this.off = false;
			}else{
				$(this).on('click', function(){
					window.location.href = $(this).attr('href');
				});
				this.off = true;
			}
		});
	});
	hlGroup.find('a').on('click', function(){
		if ( this.off ) {
			$(this).addClass('hl-selected');
			hlConfirm.removeClass('disabled');
			this.off = false;
		} else {
			$(this).removeClass('hl-selected');
			if($('.hl-selected').length == 0 && !$(this).hasClass('hl-selected')){
				hlConfirm.addClass('disabled');
			}			
			this.off = true;
		}		
	});
	hlConfirm.on('click', function(){
		if($('.hl-selected').length > 0){
			window.location.reload();
		}
		
	});
}

tabTragger();
function tabTragger(){
	var hlVTab = $('.hl-v-tab li'),
		hlTabCont = $('.hl-tab-cont .hl-tab-cont-item');

	hlVTab.hover(function(event){
		var i = $(this).index();
		event.stopPropagation();
		$(this).addClass('hl-open').siblings().removeClass('hl-open');
		hlTabCont.eq(i).show().siblings().hide();
	}, function(){

	});
	hlTabCont.parent().parent().mouseleave(function(){
		hlVTab.removeClass('hl-open');
		hlTabCont.hide();
	});
}