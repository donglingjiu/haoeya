@extends('system.layout.sys')
@section('content')
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="{{'/sys/index'}}">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">系统设置</span></div>
        </div>
        <div class="result-wrap">
            <form action="{{'/sys/doconfig'}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="config-items">
                    <div class="config-title">
                        <h1><i class="icon-font">&#xe00a;</i>网站信息设置</h1>
                    </div>
                    <div class="result-content">
                        <table width="" class="insert-tab">
                            <tbody><tr>
                                <th width="20%"><i class="require-red">*</i>网站名称：</th>
                                <td><input type="text" name="webname" value=''></td>
                            </tr>
                                <tr>
                                    <th><i class="require-red">*</i>网站关键字：</th>
                                    <td><input type="text" name='keywords' vlaue=''></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>网站loge：</th>
                                    <td><input type="file" name='loge' multiple="multiple">
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>网站版权：</th>
                                    <td><input type="text" name='copy' value=''></td>
                                </tr>
                                <tr>
                                   <th><i class="require-red">*</i>网站状态：</th>  
                                   <td>
                                        <select name="status" id="">
                                            <option value="1">开启</option>
                                            <option value="0">关闭</option>
                                        </select>
                                   </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="submit" value="提交" class="btn btn-primary btn6 mr10">
                                        <input type="button" value="返回" onClick="history.go(-1)" class="btn btn6">
                                    </td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection