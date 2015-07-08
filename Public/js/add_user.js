/*
 * 添加管理员页面的 js
 * */

$(function () {

  /* 表单验证 */
  $("#form").validate({
    rules: {
      email: {
        required: true,
        email: true
      },  // end email rules

      fake_password: {
        required: true,
        rangelength: [6, 16]
      }, //end password rules

      confirm_password: {
        equalTo: "#fake_password"
      }
    },   //end rules

    messages: {
      email: {
        required: "please supply an email address",
        email: "this is not a valid email address"
      }, //end email message

      fake_password: {
        required: "Please type a password",
        rangelength: "Password must be between 6 and 16 characters long"
      }, // end password message

      confirm_password: {
        equalTo: "the two password do not match!"
      }
    },

    submitHandler: function (form) {
      var md5Pwd = $.md5($("#fake_password").val());
      $("#password").val(md5Pwd);
      // ...

      form.submit();
    }
  });

  // 检查用户名是否已经存在
  $('#user_name').blur(function () {
    var curName = $("#cur_name").val();
    var name = $(this).val();

    if (name === curName) {
      return;
    }

    $.get(Ohana.apiPath + 'check_name_exist', {
      user_name: $(this).val()
    }, function (data) {
      if (data) {
        if (data.isExist) {
          alert('用户已存在！')
        }
      }
    })
  })


  /*$("#user_name").blur(function() {
   $.get(Ohana.apiPath + 'check_user_name_exist', {
   user_name: $(this).val()
   }, function(data) {
   if(data) {
   if(data.isExist) {
   alert('用户名已存在!');
   }
   }
   });
   });*/
})