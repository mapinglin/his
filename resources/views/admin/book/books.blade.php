@extends("admin.layout.main")

@section('css')
<style type="text/css">
    .layui-form {margin: 10px 40px; width: 60%;}
</style>
@endsection

@section("content")
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">
                输入框
            </label>
            <div class="layui-input-block">
                <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">密码框</label>
            <div class="layui-input-inline">
                <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">密码长度5-10</div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">正$nbsp文</label>
            <div class="layui-input-inline">
                <input type="text" name="content" required lay-verify="required" placeholder="请输入正文内容" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">文字内容20-40</div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>
@endsection

@section("js")
    <script type="text/javascript" src="/layadmin/modul/book/test.js"></script>
@endsection
