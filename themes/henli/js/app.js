!$(function(){

// /*菜单选择*/
// $(".hl-nav-list").on('click', '.hl-nav-item', function(event) {
//   event.preventDefault();
//   /* Act on the event */
//   console.log(1111111);
//   if (!$(this).hasClass('active')) {
//     $(this).addClass('active').siblings().removeClass('active');
//   }
// });

// 结算
var money = function() {
  var ipt = $(".hl-order-detail .hl-has-pro input:checked");
  var m = 0;
  var n = 0;
  var ym = 0;
  $.each(ipt, function(index, val) {
     /* iterate through array or object */
     n += parseInt($(this).closest('tr').find('.hl-counter-num').val());
     m += parseFloat($(this).closest('tr').find('.hl-price').text())*parseInt($(this).closest('tr').find('.hl-counter-num').val());
     ym +=parseFloat($(this).closest('tr').find('.market_price').val())*parseInt($(this).closest('tr').find('.hl-counter-num').val());
  });
  // console.log(ym);
  $(".hl-order-pay .hl-order-money").text(m.toFixed(2));
  $(".hl-order-pay .hl-order-free").text((ym-m).toFixed(2));
  $(".hl-order-pay .hl-order-pro-num").text(n);
}

/*全部订单选择*/
// $(".hl-order-header").on('click', '.hl-order-header-item', function(event) {
//   event.preventDefault();
//    Act on the event 
//   if (!$(this).hasClass('active')) {
//     $(this).addClass('active').siblings().removeClass('active');
//   }
// });

/*商品计数器——减少*/
$(".hl-counter").on('click', '.hl-counter-sub', function(event) {
  event.preventDefault();
  /* Act on the event */
  var num = parseInt($(this).siblings('.hl-counter-num').val());
  if (num < 2) return;
  $(this).siblings('.hl-counter-num').val(num-1);
  if ($(this).closest('tr').find(':checkbox').prop('checked')) {
    money();
  }
});

/*商品计数器——增加*/
$(".hl-counter").on('click', '.hl-counter-add', function(event) {
  event.preventDefault();
  /* Act on the event */
  var num = parseInt($(this).siblings('.hl-counter-num').val());
  var max = parseInt($(this).siblings('.hl-counter-num').attr('max'))
  if (max != undefined && num >= max) {
    $(this).siblings('.hl-counter-num').val(max);
  }else{
    $(this).siblings('.hl-counter-num').val(num+1);
  }
  
  if ($(this).closest('tr').find(':checkbox').prop('checked')) {
    money();
  }
});

/*商品计数器——直接修改商品数量*/
$(".hl-counter").on('change', '.hl-counter-num', function(event) {
  event.preventDefault();
  /* Act on the event */
  var num = parseInt($(this).val());
  if (isNaN(num)) {
    $(this).val(1);
    return;
  }
  if (num < 2) {
    $(this).val(1);  
  }
  if ($(this).closest('tr').find(':checkbox').prop('checked')) {
    money();
  }
});
// 单独选择或者取消某个结算商品
$(".hl-order-detail .hl-has-pro").on('click', 'input[type="checkbox"]', function(event) {
  money();
});
/*全选、反选商品*/
$(".hl-order-pay .checkbox input:checkbox").on('click', function(event) {
  $(".hl-order-detail .hl-has-pro input[type='checkbox']").prop('checked',$(this).prop('checked'));
  money();
});

// 筛选商品属性
$(".hl-stock").on('click', 'ul li a', function(event) {
  event.preventDefault();
  /* Act on the event */
  var ele = $(this).closest('li');
  // 当前规则价格
  var np = parseFloat(ele.attr('price'));
  // console.log(np);
  // console.log(ele);
  if (!ele.hasClass('hl-selected') && !isNaN(np)) {
    var oele = ele.siblings('.hl-selected');
    // 变化样式
    ele.addClass('hl-selected').removeClass('hl-disabled');
    oele.removeClass('hl-selected').addClass('hl-disabled');
    
    var op = parseInt(oele.attr('price'));
    var sp = parseFloat($(".hl-shop-price strong").text());
    $(".hl-shop-price strong").text((sp-op+np).toFixed(2));
  }
});

/*产品详情图片轮转*/
var unslider = $('.hl-banner').unslider({
    autoplay: false,
    speed: 1000, // 滚动速度
    delay: 2000, // 动画延迟
    // complete: function() {}, // 动画完成的回调函数
    keys: false, // 启动键盘导航
    dots: false, // 显示点导航
    nav:false,
    arrows:false,
    fluid: false // 支持响应式设计
  });
$(".hl-thumb").on('click', '.hl-arrow-l', function(event) {
    event.preventDefault();
    /* Act on the event */
    var ac = $(this).siblings('ul').find('li.active');
    // 是否到左边尽头
    if (!ac.prev().length || ac.prev() == undefined) return;
    var acp = ac.prev();
    // 将做左边图片设置为激活
    ac.removeClass('active');
    acp.addClass('active');
    // 当前激活元素大于左边
    if (acp.prev().length && acp.prev() != undefined) {
      acp.prev().show('slow',function() {
      });
      ac.next().hide('slow', function() {
      });
    }
    unslider.unslider('animate:'+acp.index());
  });
  $(".hl-thumb").on('click', '.hl-arrow-r', function(event) {
    event.preventDefault();
    /* Act on the event */
    var ac = $(this).siblings('ul').find('li.active');
    var idx = ac.index();
    // 是否到右边尽头
    if (!ac.next().length || ac.next() == undefined) return;
    var acn = ac.next();
    // 将做左边图片设置为激活
    ac.removeClass('active');
    acn.addClass('active');
    // 当前激活元素大于右边
    if (acn.next().length && acn.next() != undefined ) {
      ac.prev().hide('slow', function() {});
      acn.next().show('slow',function() {});
    }
    unslider.unslider('animate:'+acn.index());
  });
  $(".hl-thumb").on('click', 'li', function(event) {
    event.preventDefault();
    /* Act on the event */
    if ($(this).hasClass('active')) return;
    $(this).addClass('active').siblings('li.active').removeClass('active');
    if ($(this).prev().length && $(this).prev() != undefined && $(this).next().length && $(this).next() != undefined ) {
      $(this).prev().show('slow', function() {}).prev().hide('slow', function() {});
      $(this).next().show().next('slow', function() {}).hide('slow', function() {});
    }
    unslider.unslider('animate:'+$(this).index());
  });
});

function drop_goods(_this) {
  // stopDefault(_this);
  var ipt = $(".hl-order-detail .hl-has-pro input:checked");
  var i = '0';
  if (ipt.length>0) {
    $.each(ipt, function(index, val) {
       i += '-'+val.value;
    });
    // console.log(i);
  }
  // console.log(_this.href+'&id='+i);
  window.location.href=(_this.href+'&id='+i);
  return false;
}
function drop_to_collect(_this) {
  // stopDefault(_this);
  var ipt = $(".hl-order-detail .hl-has-pro input:checked");
  var i = '0';
  if (ipt.length>0) {
    $.each(ipt, function(index, val) {
       i += '-'+val.value;
    });
    // console.log(i);
  }
  // console.log(_this.href+'&id='+i);
  window.location.href=(_this.href+'&id='+i);
  return false;
}
// function clear_goods_down(_this) {
//   // stopDefault(_this);
//   var ipt = $(".hl-order-detail .hl-has-pro input:checked");
//   var i = '0';
//   if (ipt.length>0) {
//     $.each(ipt, function(index, val) {
//        i += '-'+val.value;
//     });
//     // console.log(i);
//   }
//   // console.log(_this.href+'&id='+i);
//   window.location.href=(_this.href+'&id='+i);
//   return false;
// }