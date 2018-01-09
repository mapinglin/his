/**
 * Created by Administrator on 2018/1/9.
 */
layui.config({base: '/layadmin/modul/common/'}).use(['form','dialog','his'],function(){
    var form = layui.form,
        dialog = layui.dialog,
        //his = layui.his;
        $ = layui.jquery;

    form.on("submit(formDemo)",function(data){
        var loadIndex = dialog.load('数据提交中，请稍候');
        $.ajax({
            headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content') },
            url: '/admin/books'
            ,type: 'post'
            ,data: data.field
            ,complete: function(){
                dialog.close(loadIndex);
            },
            error: function(msg){
                dialog.error(msg);
            },
            success: function(msg, data, meta){
                //console.log(msg);
                dialog.msg("添加成功！");
                dialog.closeAll("iframe");
                //刷新父页面
                parent.location.reload();
            }
        });
    });

});