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
  $.each(ipt, function(index, val) {
     /* iterate through array or object */
     n += parseInt($(this).closest('tr').find('.hl-counter-num').val());
     m += parseFloat($(this).closest('tr').find('.hl-price').text())*parseInt($(this).closest('tr').find('.hl-counter-num').val());
  });
  $(".hl-order-pay .hl-order-money").text(m.toFixed(2));
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
  $(this).siblings('.hl-counter-num').val(num+1);
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


});