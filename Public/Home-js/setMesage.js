/*仿刷新：检测是否存在cookie*/
    if($.cookie("captcha")){
      var count = $.cookie("captcha");
      var btn = $('#getting');
      btn.val(count+'秒后可重新获取').attr('disabled',true).css('cursor','not-allowed');
      var resend = setInterval(function(){
        count--;
        if (count > 0){
          btn.val(count+'秒后可重新获取').attr('disabled',true).css('cursor','not-allowed');
          $.cookie("captcha", count, {path: '/', expires: (1/86400)*count});
        }else {
          clearInterval(resend);
          btn.val("获取验证码").removeClass('disabled').removeAttr('disabled style');
        }
      }, 1000);
    }
    /*点击改变按钮状态，已经简略掉ajax发送短信验证的代码*/
    $('#getting').click(function(){
      var btn = $(this);
      var count = 60;
      var resend = setInterval(function(){
        count--;
        if (count > 0){
          btn.val(count+"秒后可重新获取");
          $.cookie("captcha", count, {path: '/', expires: (1/86400)*count});
        }else {
          clearInterval(resend);
          btn.val("获取验证码").removeAttr('disabled style');
        }
      }, 1000);
      btn.attr('disabled',true).css('cursor','not-allowed');
    });