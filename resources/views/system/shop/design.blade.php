@extends('system.layout.sys')
@section('content')
     <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="{{'/sys/index'}}">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">店家管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="{{'/sys/shop/create'}}"><i class="icon-font"></i>新增店家</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>      
                            <th>ID</th>
                            <th>店铺名称</th>
                            <th>店铺地址</th>
                            <th>电话</th>
                            <th>门户loge</th>
                            <th>配送费</th>
                            <th>店铺月销售量</th>
                            <th>店铺评分</th>
                            <th>店铺公告</th>
                            <th>开店时间</th>
                            <th>店铺权限</th>
                            <th>操作</th>
                        </tr>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>id</td>
                            <td>店铺名称</td>
                            <td>店铺地址</td>
                            <td>电话</td>
                            <td>门户loge</td>
                            <td>配送费</td>
                            <td>店铺月销售量</td>
                            <td>店铺评分</td>
                            <td>店铺公告</td>
                            <td>开店时间</td>
                            <td>店铺权限</td>
                            <td>
                                <a class="link-update" href="{{'/sys/shop/10/edit'}}">修改</a>
                                <a class="link-del" href="#">删除</a>
                            </td>
                        </tr>          
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
@endsection