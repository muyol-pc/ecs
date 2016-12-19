slider('.hl-slider-con', '.hl-slider-banner ul', '.hl-select');
slider('.hl-activity', '.hl-activity-slider ul', '.hl-activity-select');
/**
 * 幻灯片功能
 */
function slider(element, img, select){
	var obj = $(element),
		img = $(img),
		selecct = $(selecct);
	obj.slide({
		titCell: select,
		mainCell: img,
		autoPage: true,
		effect: "fade",
		autoPlay: true,
		trigger: "click"
	});
};