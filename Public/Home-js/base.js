/*
*
*
* 2014-12-30  design by Allen
* */


$(function(){

  $('[data-role="click-it"]').click(function(){
    if($(this).data('expend')) {
      $(this).data('expend', false).siblings('ul').hide();
    } else {
      $(this).data('expend', true).siblings('ul').show();
    }
    $(this).parent().siblings('li').find('i').data('expend', false).siblings('ul').hide(); 
  })
})
