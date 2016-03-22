/**
 * Created by Administrator on 15-1-6.
 */
$(function() {
  $("#file1").uploadify({
    width: 80,
    height: 30,
    swf: '__PUBLIC__/js/lib/uploadify/uploadify.swf',
    uploader: "{:U('uploadLogo')}",
    buttonText: "上传图片",
    onUploadSuccess: function(file, data, respone) {
      var jsonData = JSON.parse(data);
      if(jsonData.status === 'ok') {
        $("input[name=logo]").val(jsonData.data);
        $("#logo_img").attr('src', '__PUBLIC__/upload/img/' + jsonData.data);
      } else {
        alert('上传失败!');
      }
    }
  });
});