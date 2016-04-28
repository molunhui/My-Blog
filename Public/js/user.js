
var super_admin = $("#cur_user").val();
var cur_id = $('#cur_id').val();
// console.log(cur_id);

function confirmDel() {
    $.post(Ohana.apiPath + 'del_user', {
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
}

$(function(){

    $('.del').click(function(){
        // 利用click方法获取，当前点击的数据的id，再用post方法将该id传递给 Ohana.apiPath + 'del_user'，执行相应程序，
        //返回一个回调参数data对象给回调方法，执行相应功能
        
        if (super_admin == 1) { // 判断当前用户是否是超级管理员，删除管理员是超级管理员的权利
            if(confirm('确认删除？')) {
                $.post(Ohana.apiPath + 'del_user', {
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
                return false;
            }
        }else {
            alert('你没有此权限！');
        }
    })

    $('.edit').on('click',function(e) {
        var tag_id = $(this).data('id');
        if(super_admin == 1 || cur_id == tag_id) {
            if(confirm('确认修改？')){
                return 1;
            }
        }else {
            e.preventDefault();
            alert("你没有此权限！");
        }

    })

})