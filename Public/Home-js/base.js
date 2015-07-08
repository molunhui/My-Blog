/*
 *
 *
 * 2014-12-30  design by Allen
 * */


$(function () {
  /*var mainH = $('#main').height();
   var sideH = $('#sidebar').height();
   if(mainH > sideH){
   $('#sidebar').css({"height": mainH});
   }else {
   $('#main').css({"height": sideH});
   }*/

  $('[data-role="click-it"]').click(function () {
    if ($(this).data('expend')) {
      $(this).data('expend', false).siblings('ul').hide();
    } else {
      $(this).data('expend', true).siblings('ul').show();
    }
    $(this).parent().siblings('li').find('i').data('expend', false).siblings('ul').hide();
  })
})
