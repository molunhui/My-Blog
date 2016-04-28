$(function(){
  $('.del').click(function(){
    // 利用click方法获取，当前点击的数据的id，再用post方法将该id传递给 Ohana.apiPath + 'del_user'，执行相应程序，
    //返回一个回调参数data对象给回调方法，执行相应功能
    if(confirm('确认删除？')) {
       $.post(Ohana.apiPath + 'del_cate', {
      id: $(this).data('id')              //$(this).data('id')获取被点击对象的数据data的id
    }, function(data){
      if(data.status === 'ok') {
        // alert('删除成功！');

        // 刷新当前页面
        window.location.reload();
      } else {
        alert('删除失败');
      }
    })
     }else {
      return 0;
     }
    // $.post(Ohana.apiPath + 'del_cate', {
    //   id: $(this).data('id')              //$(this).data('id')获取被点击对象的数据data的id
    // }, function(data){
    //   if(data.status === 'ok') {
    //     // alert('删除成功！');

    //     // 刷新当前页面
    //     window.location.reload();
    //   } else {
    //     alert('删除失败');
    //   }
    // })
  })

})