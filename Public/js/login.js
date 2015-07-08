$(function () {
  $("form").click(function () {
    var md5Pwd = $.md5($("#fake_password").val());
    $("#password").val(md5Pwd);
    // ...
    /*form.submit();*/
  })
})