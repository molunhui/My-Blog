/* 边栏菜单下拉功能 */
$(function () {
  /*var sideH = $('#sidebar').height();
  var mainH = $('.main').height();
  if(sideH >= mainH){
    $('.main').css({"height":sideH})
  }else{
    $('#sidebar').css({"height":mainH})
  }*/

    $(".sidebar li:has(ul)").click(function () {
        $(".sidebar li:has(ul)").find('ul').hide();
        $(".cur").removeClass('cur');
        $(this).addClass('cur');
        $(this).find('ul').show();
    });


    /* header用户信息下拉 */
    $("#user-menu").hover(function () {
            $(".user-sub-menu").show("1000");
        },
        function () {
            $(".user-sub-menu").hide("1000");
        });

    $(".table li:has(ul)").click(function () {

        $(".table li:has(ul)").find('ul').hide();
        $(this).find('ul').show();
    });

})