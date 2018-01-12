<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="description" content=" 上海[半价菜][送可乐]樱花日本料理评论 - 怎么样，宋园路地铁站附近餐厅， [半价菜][送可乐]樱花日本料理 外卖，外送电话，叫外卖上外卖超人。" />
    <meta name="viewport" content="user-scalable=no">
    
    <meta name="google-site-verification" content="BstJA3X9z6f9HcvoN9AZTwaKo_9Abj_j7dVBPfy640s" />
    <meta name="baidu-site-verification" content="IYCrtVH0i1" />
    <meta property="wb:webmaster" content="239d3d1dbdde1b2c" />
    <link rel="icon" type="image/png" href="{{asset('Home/images/favicon.ico')}}"/>
    
    <script type="text/javascript">
        
        (function(document, screen) {if (screen.width < 760) {document.location.href="/mobile/";}}(document, screen));
    </script>
    
    <link rel="stylesheet" href="{{asset('Home/css/common.css')}}"/>
    
    <link rel="stylesheet" href="{{asset('Home/css/menuPage.css')}}"/>

    <!--[if lte IE 7]><script>window.onload=function(){location.href="/ie6warning/"}</script><![endif]-->
    <!--[if lt IE 9]>
    <script src="js/respond.js"></script>
    <script>
        var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video, dh-dialog, dh-checkbox".split(', ');
         var i= e.length;while (i--){document.createElement(e[i])}
    </script>
    <![endif]-->
    <title>店铺评论</title>
</head>
<body class="day " ng-controller="bodyCtrl"  day-or-night>
    <section class="common-back" id="wrapBackground">
        
            <header id="header">
                <div class="common-width clearfix">
                    <h1 class="fl">
                        <a class="logo base-logo" href="index.html">外卖超人</a>
                    </h1>
                    
                        <ul class="member" login-box>
                            <li><a href="{{asset('/home/list')}}" class="index">首页</a></li>
                            <li class="login-register"><a href="{{asset('/home/login/login')}}" referer-url  class="login"  rel="nofollow">登录</a><span class="cg">/</span><a href="{{asset('/home/login/login')}}" referer-url  rel="nofollow" class="register">注册</a></li>
                            <li><a href="{{asset('/home/user/member_order')}}" class="order-center"  rel="nofollow">查看订单</a></li>
                            <li class=""><a href="#"  rel="nofollow">氪星礼品站</a></li>
                            <li class="phone-client "><a href="#"  rel="nofollow" target="_blank"><span>手机客户端</span></a></li>
                        </ul>
                    
                </div>
            </header>
        
        <div id="main-box">
             <!--二维码-->
            <div class="qrCode-frame" ng-hide="qrCodeStatus">
                <img src="{{asset('Home/images/wx.png')}}" alt="扫描二维码" />
                <em ng-click="qrCodeStatus=true">X</em>
            </div>
        
            <div ng-controller="colorAction">
                <div class="dayColor_two"></div>
                <div class="dayColor_one"></div>
                <div class="dayColor_three" ng-class="{dayColor_threeActive:threeActive}"></div>
            </div>
        
            
	<section class="menupage-main common-width">
        
<header class="nav clearfix">
    <div class="fl clearfix nav-des">
        <img src="{{asset('Home/images/4e5dddb0a16eb1709881143153ac3jpeg.jpeg')}}" alt="[半价菜][送可乐]樱花日本料理" class="fl" />
        <div class="fl nav-des-text">
            <h2 class="ellipsis" title="[半价菜][送可乐]樱花日本料理">[半价菜][送可乐]樱花日本料理</h2>
            <div class="clearfix">
                <div class="fl nav-review">
                    <div style="width:65.00px;"></div>
                </div>
                <p class="nav-review-x">5星</p>
            </div>
        </div>
    </div>
    <div class="fr clearfix nav-right">
        
        <div class="fl nav-right-blast line-right">
            <p>150<span style="font-size:12px;color:#999;">元</span></p>
            <span>起送</span>
        </div>
        
        <div class="fl nav-right-blast">
            <p>37<span style="font-size:12px;color:#999;">分钟</span></p>
            <span>送餐时间</span>
        </div>
        <div class="fl nav-right-collect line-left">
            
                <div class="collect not-collect" title="收藏餐厅" data-rid="1592"></div>
                <div class="collect-success">收藏成功</div>
                <div id="review-text">未收藏</div>
            
        </div>
    </div>
</header>

<ul class="clearfix menu-nav-list" scroll-position-static="160">
    <li class="no-line "><a href="{{asset('shop/shop_intro')}}">餐厅介绍</a></li>
    <li><a href="{{asset('/shop/shop_detail')}}">菜单</a></li>
    <li  class="active"><a href="{{asset('/shop/shop_comment')}}">评论</a></li>
	<li ><a href="{{asset('/shop/shop_brand')}}" id='point-tab'>大家都在点</a></li>
    
</ul>
		<section class="main-box">
			<section class="review-messages">
                <header class="review-header-box clearfix">
                       全部评论（共177条评论）
                    <label class="checkbox view-check fr" title="有内容的评论" model="filterObj">
                        <div class="checker"><span ng-class="{checked:model}">
                            <input type="checkbox" ng-model="model" ng-true-value="true" ng-disabled="disable" class="ng-pristine ng-valid">
                        </span>
                        </div>
                        <span class="ng-binding">有内容的评论</span>
                    </label>
                </header>
                
                    
                        <article class="review-item">
                                <div class="fr review-search order-detail">
                                    <a href="javascript:" class="review-read-color review-order" detailKey="Lj0t5fMW6sJW7g4Pz6r778NDM9Q56bOUZJYGOzUtBsbgzURWJvqVZeO8pv70cmUb">看他点了什么 ></a>
                                    <div class="order-menu-info">
                                        <div class="order-menu-inner">
                                            <div class="order-loding" ng-hide="loadStatus['Lj0t5fMW6sJW7g4Pz6r778NDM9Q56bOUZJYGOzUtBsbgzURWJvqVZeO8pv70cmUb']">
                                                <img src="{{asset('Home/images/o_loading.gif')}}" alt="">
                                            </div>
                                            <div class="order-loding" ng-show="loadError['Lj0t5fMW6sJW7g4Pz6r778NDM9Q56bOUZJYGOzUtBsbgzURWJvqVZeO8pv70cmUb']" ng-bind="errorText"></div>
                                            <div class="order-menu-body">  
                                                <div class="order-detail-item" ng-class="{last:$last}" ng-repeat="menu_itemmenu_item in menuItenmenus['Lj0t5fMW6sJW7g4Pz6r778NDM9Q56bOUZJYGOzUtBsbgzURWJvqVZeO8pv70cmUb'] track by $index">
                                                    <div class="goods-name ellipsis" ng-bind="menu_itemmenu_item"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-close">×</div>
                                    </div>
                                </div>
                                <span>183****7031</span>
                                <span>2015-05-01 15:09:14</span>
                                <span class="small-star">
                                    <span style="width:65.00px;"></span>
                                </span>
                            <div class="review-content"></div>
                            
                            
                        </article>
                    
                        <article class="review-item">
                                <div class="fr review-search order-detail">
                                    <a href="javascript:" class="review-read-color review-order" detailKey="kDk67nyLBTCbEEkSeLwAYzlitxpqUhphaMWzIDW2RPCkp1TVpo03JoqFGGKnw8c0">看他点了什么 ></a>
                                    <div class="order-menu-info">
                                        <div class="order-menu-inner">
                                            <div class="order-loding" ng-hide="loadStatus['kDk67nyLBTCbEEkSeLwAYzlitxpqUhphaMWzIDW2RPCkp1TVpo03JoqFGGKnw8c0']">
                                                <img src="{{asset('Home/images/o_loading.gif')}}" alt="">
                                            </div>
                                            <div class="order-loding" ng-show="loadError['kDk67nyLBTCbEEkSeLwAYzlitxpqUhphaMWzIDW2RPCkp1TVpo03JoqFGGKnw8c0']" ng-bind="errorText"></div>
                                            <div class="order-menu-body">  
                                                <div class="order-detail-item" ng-class="{last:$last}" ng-repeat="menu_itemmenu_item in menuItenmenus['kDk67nyLBTCbEEkSeLwAYzlitxpqUhphaMWzIDW2RPCkp1TVpo03JoqFGGKnw8c0'] track by $index">
                                                    <div class="goods-name ellipsis" ng-bind="menu_itemmenu_item"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-close">×</div>
                                    </div>
                                </div>
                                <span>183****7031</span>
                                <span>2015-05-01 15:08:44</span>
                                <span class="small-star">
                                    <span style="width:65.00px;"></span>
                                </span>
                            <div class="review-content"></div>
                            
                            
                        </article>
                    
                        <article class="review-item">
                                <div class="fr review-search order-detail">
                                    <a href="javascript:" class="review-read-color review-order" detailKey="rzdYjyes2WPaf2-UX14h3Ai5-iNCGYYKlRkDolNb_QdBGsgbqU2hFDgCcHUY6h8C">看他点了什么 ></a>
                                    <div class="order-menu-info">
                                        <div class="order-menu-inner">
                                            <div class="order-loding" ng-hide="loadStatus['rzdYjyes2WPaf2-UX14h3Ai5-iNCGYYKlRkDolNb_QdBGsgbqU2hFDgCcHUY6h8C']">
                                                <img src="images/o_loading.gif" alt="">
                                            </div>
                                            <div class="order-loding" ng-show="loadError['rzdYjyes2WPaf2-UX14h3Ai5-iNCGYYKlRkDolNb_QdBGsgbqU2hFDgCcHUY6h8C']" ng-bind="errorText"></div>
                                            <div class="order-menu-body">  
                                                <div class="order-detail-item" ng-class="{last:$last}" ng-repeat="menu_itemmenu_item in menuItenmenus['rzdYjyes2WPaf2-UX14h3Ai5-iNCGYYKlRkDolNb_QdBGsgbqU2hFDgCcHUY6h8C'] track by $index">
                                                    <div class="goods-name ellipsis" ng-bind="menu_itemmenu_item"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-close">×</div>
                                    </div>
                                </div>
                                <span>183****7031</span>
                                <span>2015-05-01 15:08:13</span>
                                <span class="small-star">
                                    <span style="width:65.00px;"></span>
                                </span>
                            <div class="review-content"></div>
                            
                            
                        </article>
                    
                        <article class="review-item">
                                <div class="fr review-search order-detail">
                                    <a href="javascript:" class="review-read-color review-order" detailKey="VCPxHEKn34ZzM6y3Cwul1gKi6zAxct9tk3B51KUhFXuiaCWjjAoePZ_NoyQrO16d">看他点了什么 ></a>
                                    <div class="order-menu-info">
                                        <div class="order-menu-inner">
                                            <div class="order-loding" ng-hide="loadStatus['VCPxHEKn34ZzM6y3Cwul1gKi6zAxct9tk3B51KUhFXuiaCWjjAoePZ_NoyQrO16d']">
                                                <img src="images/o_loading.gif" alt="">
                                            </div>
                                            <div class="order-loding" ng-show="loadError['VCPxHEKn34ZzM6y3Cwul1gKi6zAxct9tk3B51KUhFXuiaCWjjAoePZ_NoyQrO16d']" ng-bind="errorText"></div>
                                            <div class="order-menu-body">  
                                                <div class="order-detail-item" ng-class="{last:$last}" ng-repeat="menu_itemmenu_item in menuItenmenus['VCPxHEKn34ZzM6y3Cwul1gKi6zAxct9tk3B51KUhFXuiaCWjjAoePZ_NoyQrO16d'] track by $index">
                                                    <div class="goods-name ellipsis" ng-bind="menu_itemmenu_item"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-close">×</div>
                                    </div>
                                </div>
                                <span>183****7031</span>
                                <span>2015-05-01 15:07:58</span>
                                <span class="small-star">
                                    <span style="width:65.00px;"></span>
                                </span>
                            <div class="review-content"></div>
                            
                            
                        </article>
                    
                        <article class="review-item">
                                <div class="fr review-search order-detail">
                                    <a href="javascript:" class="review-read-color review-order" detailKey="7RzS3t2JcLMHuUcAAbSkfLfDNb5IXnzhYxV3KNvuazmYU-wK6v3Wi_jCcvw2VmJj">看他点了什么 ></a>
                                    <div class="order-menu-info">
                                        <div class="order-menu-inner">
                                            <div class="order-loding" ng-hide="loadStatus['7RzS3t2JcLMHuUcAAbSkfLfDNb5IXnzhYxV3KNvuazmYU-wK6v3Wi_jCcvw2VmJj']">
                                                <img src="images/o_loading.gif" alt="">
                                            </div>
                                            <div class="order-loding" ng-show="loadError['7RzS3t2JcLMHuUcAAbSkfLfDNb5IXnzhYxV3KNvuazmYU-wK6v3Wi_jCcvw2VmJj']" ng-bind="errorText"></div>
                                            <div class="order-menu-body">  
                                                <div class="order-detail-item" ng-class="{last:$last}" ng-repeat="menu_itemmenu_item in menuItenmenus['7RzS3t2JcLMHuUcAAbSkfLfDNb5IXnzhYxV3KNvuazmYU-wK6v3Wi_jCcvw2VmJj'] track by $index">
                                                    <div class="goods-name ellipsis" ng-bind="menu_itemmenu_item"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-close">×</div>
                                    </div>
                                </div>
                                <span>183****7031</span>
                                <span>2015-05-01 13:19:20</span>
                                <span class="small-star">
                                    <span style="width:65.00px;"></span>
                                </span>
                            <div class="review-content"></div>
                            
                            
                        </article>
                    
                        <article class="review-item">
                                <div class="fr review-search order-detail">
                                    <a href="javascript:" class="review-read-color review-order" detailKey="Vzwfq-bEUP9TMlfzHYt39P_CY3f1AU-sd9soBexefctSY9YygP1LLtSbbR95X-sP">看他点了什么 ></a>
                                    <div class="order-menu-info">
                                        <div class="order-menu-inner">
                                            <div class="order-loding" ng-hide="loadStatus['Vzwfq-bEUP9TMlfzHYt39P_CY3f1AU-sd9soBexefctSY9YygP1LLtSbbR95X-sP']">
                                                <img src="images/o_loading.gif" alt="">
                                            </div>
                                            <div class="order-loding" ng-show="loadError['Vzwfq-bEUP9TMlfzHYt39P_CY3f1AU-sd9soBexefctSY9YygP1LLtSbbR95X-sP']" ng-bind="errorText"></div>
                                            <div class="order-menu-body">  
                                                <div class="order-detail-item" ng-class="{last:$last}" ng-repeat="menu_itemmenu_item in menuItenmenus['Vzwfq-bEUP9TMlfzHYt39P_CY3f1AU-sd9soBexefctSY9YygP1LLtSbbR95X-sP'] track by $index">
                                                    <div class="goods-name ellipsis" ng-bind="menu_itemmenu_item"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-close">×</div>
                                    </div>
                                </div>
                                <span>183****7031</span>
                                <span>2015-05-01 13:18:03</span>
                                <span class="small-star">
                                    <span style="width:65.00px;"></span>
                                </span>
                            <div class="review-content"></div>
                            
                            
                        </article>
                    
                        <article class="review-item">
                                <div class="fr review-search order-detail">
                                    <a href="javascript:" class="review-read-color review-order" detailKey="Om9kXWQdL5yJ_4QqOE30wVjKd5qXfc9pDsAQVfP9ykAYE6R7pKfJUwQ73Xh3BbPG">看他点了什么 ></a>
                                    <div class="order-menu-info">
                                        <div class="order-menu-inner">
                                            <div class="order-loding" ng-hide="loadStatus['Om9kXWQdL5yJ_4QqOE30wVjKd5qXfc9pDsAQVfP9ykAYE6R7pKfJUwQ73Xh3BbPG']">
                                                <img src="images/o_loading.gif" alt="">
                                            </div>
                                            <div class="order-loding" ng-show="loadError['Om9kXWQdL5yJ_4QqOE30wVjKd5qXfc9pDsAQVfP9ykAYE6R7pKfJUwQ73Xh3BbPG']" ng-bind="errorText"></div>
                                            <div class="order-menu-body">  
                                                <div class="order-detail-item" ng-class="{last:$last}" ng-repeat="menu_itemmenu_item in menuItenmenus['Om9kXWQdL5yJ_4QqOE30wVjKd5qXfc9pDsAQVfP9ykAYE6R7pKfJUwQ73Xh3BbPG'] track by $index">
                                                    <div class="goods-name ellipsis" ng-bind="menu_itemmenu_item"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-close">×</div>
                                    </div>
                                </div>
                                <span>136****1674</span>
                                <span>2015-05-01 12:23:38</span>
                                <span class="small-star">
                                    <span style="width:65.00px;"></span>
                                </span>
                            <div class="review-content"></div>
                            
                            
                        </article>
                    
                        <article class="review-item">
                                <div class="fr review-search order-detail">
                                    <a href="javascript:" class="review-read-color review-order" detailKey="sVqkOo21dXu5nX-_5OM6SBVWrjsVYize9-P1D1hsGp5KoQqA-t_oFR0yfu4TqpkJ">看他点了什么 ></a>
                                    <div class="order-menu-info">
                                        <div class="order-menu-inner">
                                            <div class="order-loding" ng-hide="loadStatus['sVqkOo21dXu5nX-_5OM6SBVWrjsVYize9-P1D1hsGp5KoQqA-t_oFR0yfu4TqpkJ']">
                                                <img src="images/o_loading.gif" alt="">
                                            </div>
                                            <div class="order-loding" ng-show="loadError['sVqkOo21dXu5nX-_5OM6SBVWrjsVYize9-P1D1hsGp5KoQqA-t_oFR0yfu4TqpkJ']" ng-bind="errorText"></div>
                                            <div class="order-menu-body">  
                                                <div class="order-detail-item" ng-class="{last:$last}" ng-repeat="menu_itemmenu_item in menuItenmenus['sVqkOo21dXu5nX-_5OM6SBVWrjsVYize9-P1D1hsGp5KoQqA-t_oFR0yfu4TqpkJ'] track by $index">
                                                    <div class="goods-name ellipsis" ng-bind="menu_itemmenu_item"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-close">×</div>
                                    </div>
                                </div>
                                <span>136****1674</span>
                                <span>2015-05-01 12:23:29</span>
                                <span class="small-star">
                                    <span style="width:65.00px;"></span>
                                </span>
                            <div class="review-content"></div>
                            
                            
                        </article>
                    
                        <article class="review-item">
                                <div class="fr review-search order-detail">
                                    <a href="javascript:" class="review-read-color review-order" detailKey="6dOLCWECsbISQEWVHoawPLaDf5hqb2nIcSGihwWFNcw7raHUFKAGi2aayhI1O3J9">看他点了什么 ></a>
                                    <div class="order-menu-info">
                                        <div class="order-menu-inner">
                                            <div class="order-loding" ng-hide="loadStatus['6dOLCWECsbISQEWVHoawPLaDf5hqb2nIcSGihwWFNcw7raHUFKAGi2aayhI1O3J9']">
                                                <img src="images/o_loading.gif" alt="">
                                            </div>
                                            <div class="order-loding" ng-show="loadError['6dOLCWECsbISQEWVHoawPLaDf5hqb2nIcSGihwWFNcw7raHUFKAGi2aayhI1O3J9']" ng-bind="errorText"></div>
                                            <div class="order-menu-body">  
                                                <div class="order-detail-item" ng-class="{last:$last}" ng-repeat="menu_itemmenu_item in menuItenmenus['6dOLCWECsbISQEWVHoawPLaDf5hqb2nIcSGihwWFNcw7raHUFKAGi2aayhI1O3J9'] track by $index">
                                                    <div class="goods-name ellipsis" ng-bind="menu_itemmenu_item"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-close">×</div>
                                    </div>
                                </div>
                                <span>136****1674</span>
                                <span>2015-05-01 12:23:21</span>
                                <span class="small-star">
                                    <span style="width:65.00px;"></span>
                                </span>
                            <div class="review-content"></div>
                            
                            
                        </article>
                    
                        <article class="review-item">
                                <div class="fr review-search order-detail">
                                    <a href="javascript:" class="review-read-color review-order" detailKey="dbqlxS8-eRedBg0sUB6zZDcgNJwAKrHZKmERaWPzxe7bbQZR8czsfrP2Z1PfZAGz">看他点了什么 ></a>
                                    <div class="order-menu-info">
                                        <div class="order-menu-inner">
                                            <div class="order-loding" ng-hide="loadStatus['dbqlxS8-eRedBg0sUB6zZDcgNJwAKrHZKmERaWPzxe7bbQZR8czsfrP2Z1PfZAGz']">
                                                <img src="images/o_loading.gif" alt="">
                                            </div>
                                            <div class="order-loding" ng-show="loadError['dbqlxS8-eRedBg0sUB6zZDcgNJwAKrHZKmERaWPzxe7bbQZR8czsfrP2Z1PfZAGz']" ng-bind="errorText"></div>
                                            <div class="order-menu-body">  
                                                <div class="order-detail-item" ng-class="{last:$last}" ng-repeat="menu_itemmenu_item in menuItenmenus['dbqlxS8-eRedBg0sUB6zZDcgNJwAKrHZKmERaWPzxe7bbQZR8czsfrP2Z1PfZAGz'] track by $index">
                                                    <div class="goods-name ellipsis" ng-bind="menu_itemmenu_item"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-close">×</div>
                                    </div>
                                </div>
                                <span>136****1674</span>
                                <span>2015-05-01 12:23:16</span>
                                <span class="small-star">
                                    <span style="width:65.00px;"></span>
                                </span>
                            <div class="review-content"></div>
                            
                            
                        </article>
                    
                    <page total="18" show="5"></page>
                
            </section>
		</section>
	</section>

        </div>
    </section>
    
        <footer id="footer">
        <div class="footer-first gray">
            <div class="company-info clearfix fs14 gray">
                <a href="about.html" target="_blank"  rel="nofollow">关于我们</a>
                <a href="help.html" target="_blank"  rel="nofollow">帮助中心</a>
                <a href="javascript:;" target="_blank"  rel="nofollow">法律声明</a>
                <a href="jobs.html" target="_blank"  rel="nofollow">人才招聘</a>
                <a href="contact.html" target="_blank"  rel="nofollow">联系我们</a>
                <a href="javascript:;" user-feedback ng-click="userFeedback=true" class="last" rel="nofollow">意见反馈</a>
                <a href="javascript:;" class="last" target="_blank" style="display:none">上海餐厅导航</a>
            </div>
        </div>
        <div class="footer-last">
            <a target="_blank" class="foot-logo-1 base-logo" href="index.html"></a>
            <div class="tc fs14 light-gray mb10">
              ©2014 waimaichaoren.com All Rights Reserved - 沪ICP备11019908号
            </div>
        </div>
    </footer>
    
    
    <dh-dialog class="disnone" height="500" feeedbackclass="userFeedback" type="user-feedback" header="意见反馈" show="userFeedback">
        <div ng-controller="feedbackCtrl">
            <form novalidate="true" name="feedbackForm" class="inline">
                <div class="form-group row mb10">
                    <label class="col-3">联系方式：</label>
                    <div class="col-8">
                        <input type="text" maxlength="20" name="userContact" required ng-focus="userContactFocus()" ng-class="{error:feedback.phoneMessage}" placeholder="请输入您的手机号码" ng-model="feedback.userContact"/>
                    </div>
                </div>
                <div class="row mb10">
                    <div class="clo-8 col-offset-3" ng-if="feedback.phoneMessage">
                        <span class="vaildate-error">联系方式不能为空</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 vt">反馈信息：</label>
                    <div class="col-8">
                        <textarea name="feedbackMessage"  placeholder="可以说说您对外卖超人的意见" ng-focus="feedbacFocus()" required ng-class="{error:feedback.feedbackMessageTip}" ng-model="feedback.feedbackMessage" maxlength="300" cols="25" rows="7"></textarea>
                    </div>
                </div>
                <div class="row mb10">
                    <div class="clo-8 col-offset-3" ng-if="feedback.feedbackMessageTip">
                        <span class="vaildate-error">反馈信息不能为空</span>
                    </div>
                </div>
                <div class="tc">
                    <button class="btn normal-btn btn-success" ng-click="feedbackSubmit()">确认</button>
                    <button class="btn normal-btn btn-cancel" ng-click="feedbackCancel()">取消</button>
                </div>
            </form>
        </div>
        <div class="common-dialog-footer">
            咨询加QQ群：337212031
        </div>
    </dh-dialog>
    
    
<dh-dialog class="disnone" type='login' height="500" header="登录" show="loginShow" >
    <form class="login-form" novalidate name="loginForm" ng-controller="loginCtrl">
        <div class="form-group">
            <label for="">手机号码</label>
            <div>
                <input type="text" ng-model="user.username" ng-class="{error:user.usernameMessage}" ng-focus="user.usernameMessage=''" maxlength="11" placeholder="请输入你的手机号码" />
                <span class="vaildate-error" ng-if="user.usernameMessage">
                    <span ng-bind="user.usernameMessage"></span>
                </span>
                <span class="vaildate-error" ng-if="user.isLogined">
                    该手机号码尚未注册！<a href="javascript:;" ng-click="locationRegister()" class="link">立即注册</a>
                </span>
            </div>
        </div>
        <div class="form-group mb10">
            <label for="">登录密码</label>
            <div>
                <input type="password" onpaste="return false" ng-model="user.password" ng-focus="user.passwordMessage=''"  ng-class="{error:user.passwordMessage}" maxlength="10" placeholder="请输入登录密码" />
                <span class="vaildate-error" ng-if="user.passwordMessage">
                    <span ng-bind="user.passwordMessage"></span>
                </span>
            </div>
        </div>
        <div ng-init="showCaptcha=0" ng-if="showCaptcha" class="form-group inline clearfix mb10">
            <div class="fl w50p">
                <input type="text" ng-model="user.captcha" ng-focus="user.captchaMessage=''"  ng-class="{error:user.captchaMessage}" placeholder="请输入验证码">
                <span class="vaildate-error" ng-if="user.captchaMessage">
                    <span ng-bind="user.captchaMessage"></span>
                </span>
            </div>
            <label class="fr">
                <dh-captcha change="captchaChange" src="/captcha/"></dh-captcha>
            </label>
        </div>
        <div class="clearfix mb10">
            <dh-checkbox model="user.rememberme" title="记住我" class="fl"></dh-checkbox>
            <a href="/account/password/reset_via_mobile/" target="_blank" class="fs12 fr link">忘记密码</a>
        </div>
        <button class="big-btn btn-green btn mb10" ng-click="loginVaildate()" ng-disabled="loginBtnDisabled" ng-bind="loginBtn"></button>
        <div class="clearfix">
            <span class="fr fs12">
                没有账号?
                <a href="javascript:void(0)" ng-click="locationRegister()" class="link">立即注册</a>
            </span>
        </div>
    </form>
</dh-dialog>
<dh-dialog class="disnone" type='register' height="500" header="注册" show="registerShow" >
    <form ng-controller="registerCtrl" class="register-form" name="registerForm">
        <div class="form-group mb10">
            <label for="">手机号码</label>
            <div>
                <input type="text" ng-class="{error:user.usernameMessage}" maxlength="11" placeholder="请输入您的手机号码" ng-model="user.username"/>
                <span class="vaildate-error" ng-if="user.usernameMessage">
                    <span ng-bind="user.usernameMessage"></span>
                </span>
                <span class="vaildate-error" ng-if="user.isRegistered">
                    该手机号码已经注册！<a href="javascript:;" ng-click="locationLogin()" class="link">立即登录</a>
                </span>
            </div>
        </div>



        <div class="form-group captcha-wrap">
            <div class="clearfix captcha-box">
                <div class="fl form-group captcha-item">
                    <div class="fl w50p">
                        <input type="text" ng-class="{error:user.captchaMessage}" ng-focus="user.captchaMessage=''" placeholder="请输入验证码" ng-model="user.captcha" />
                        <span class="vaildate-error" ng-if="user.captchaMessage">
                            <span ng-bind="user.captchaMessage"></span>
                        </span>
                    </div>
                    <button class="fs12 fr w40p btn btn-pink" ng-click="getCaptcha()" ng-disabled="captchaDisabled" ng-bind="captchaVal"></button>
                </div>
                <div class="fl form-group captcha-item">
                    <div class="fl w50p">
                        <input type="text" ng-model="user.imgCaptcha" maxlength="4" ng-disabled="imgCaptchaIsDisabled" ng-class="{error:user.imgCaptchaMessage}" placeholder="请输入验证码">
                        <span class="vaildate-error" ng-if="user.imgCaptchaMessage">
                            <span ng-bind="user.imgCaptchaMessage"></span>
                        </span>
                    </div>
                    <label class="fr">
                        <dh-captcha style="width:119px;height:34px;" change="captchaImgChange" src="/captcha/"></dh-captcha>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group mb10">
            <label for="">登录密码</label>
            <div><input type="password" ng-class="{error:user.passwordMessage}" ng-focus="user.passwordMessage=''"  maxlength="10" onpaste="return false" placeholder="输入登录密码 6-10个字符" ng-model="user.password" />
                <span class="vaildate-error" ng-if="user.passwordMessage">
                    <span ng-bind="user.passwordMessage"></span>
                </span>
            </div>
        </div>
        <div class="form-group mb10">
            <div><input type="password" ng-class="{error:user.password2Message}" ng-focus="user.password2Message=''" maxlength="10" onpaste="return false" placeholder="输入登录密码 6-10个字符" ng-model="user.password2"/>
                <span class="vaildate-error" ng-if="user.password2Message">
                    <span ng-bind="user.password2Message"></span>
                </span>
            </div>
        </div>
        <div class="clearfix mb10">
            <dh-checkbox model="user.remember" title="我同意外卖超人" class="fl"></dh-checkbox>
            <a href="/terms-and-conditions/" target="_blank" class="fs12 fl link"> " 注册条款 "</a>
        </div>
        <button ng-disabled="!user.remember || registerBtnDisabled" ng-click="registerVaildate()" class="big-btn btn-green btn mb10" ng-bind="registerBtn"></button>
    </form>
</dh-dialog>
<script>
    var common_sms_code = '/ajax/common_sms_code/';
    var ajax_customer_user_register_start = '/ajax/customer_user_register_start/';
    var common_validate_sms_code = '/ajax/common_validate_sms_code/';
    var ajax_customer_user_register_register = '/ajax/customer_user_register_register/';
</script>

    <dh-dialog class="disnone" type="alert" index="1001" header="" show="showErrorMsg">
        <div class="alert-box" ng-class="errorIcon">
            <p ng-bind="errorMsg"></p>
        </div>
    </dh-dialog>

     <ul class="site-fixed">
        <li class="scroll-top"><img src="{{asset('Home/images/scroll_top1.png')}}" alt=""/> </li>
        <li class="scorll-feekback" ng-click="userFeedback=true">
            <img src="{{asset('Home/images/scorll_feekback.png')}}" alt=""/>
            <div>意见反馈</div>
        </li>
        <li class="scroll-wx">
            <img src="{{asset('Home/images/scroll_wx.png')}}" alt=""/>
             <div><img src="{{asset('Home/images/wx.png')}}" alt=""/></div>
        </li>
    </ul>
    
    <script type="text/javascript" src="{{asset('Home/js/angular.min.js')}}"></script>
    <script src="{{asset('Home/js/common.js')}}"></script>
    
     
    <script src="{{asset('Home/js/service.js')}}"></script>
    
    <script>var feedbackUrl = '/ajax/feedback/';var app = angular.module("app", ["dh.dialog", "dh.form", 'dh.service', 'dh.other']);</script>
    <!--[if lt IE 9]><script src="js/fix.js"></script><![endif]-->
    
    
    <script>
        //字符替换
        String.prototype.changeQuery = function (name, value) {
            var reg = new RegExp("(^|)" + name + "=([^&]*)(|$)");
            var tmp = name + "=" + value;
            if (this.match(reg) != null) {
                return this.replace(eval(reg), tmp);
            }
            else {
                if (this.match("[\?]")) {
                    return this + "&" + tmp;
                }
                else {
                    return this + "?" + tmp;
                }
            }
        }
        //获取URL参数
        function getQueryStringRegExp(name) {
            var reg = new RegExp("(^|\\?|&)" + name + "=([^&]*)(\\s|&|$)", "i");
            if (reg.test(location.href))
                return unescape(RegExp.$2.replace(/\+/g, " "));
            return "";
        }
        function SetUrlParm(parm, value) {
            var URL = location.href;
            if (URL.indexOf('?') < 0) {
                URL += '?' + parm + '=' + value;
            }
            else {
                var dataParm = getQueryStringRegExp(parm);
                if (dataParm == '') {
                    URL += '&' + parm + '=' + value;
                }
                else {
                    URL = URL.changeQuery(parm, value);
                }
            }
            return URL;
        }
        app.directive("viewCheck",function(){
            return{
                restrict:'C',
                link: function(scope,elem,attrs){
                    elem.on('click',function(e){
                        e=e||window.event;
                        var elem= e.target;
                        var url=window.location.href;
                        if(getQueryStringRegExp("content")!="false"&&getQueryStringRegExp("content")!=""&&getQueryStringRegExp("content")!=null){
                             url=url.changeQuery("content","false");
                               if(url.indexOf("page")>0){
                                    window.location.href=url.changeQuery("page","1");
                                }else{
                                    window.location.href=url;
                               }
                        }else{
                            url=SetUrlParm("content",'true');
                            if(url.indexOf("page")>0){
                                window.location.href=url.changeQuery("page","1");
                            }else{
                                window.location.href=url;
                            }
                        }
                        scope.$apply();
                    })
                }
            }
        });
        app.controller("bodyCtrl",["$scope","cache",'$window','$interval', "$http" , function(scope,cache,window,$interval,$http){
            if(getQueryStringRegExp("content")!="false"&&getQueryStringRegExp("content")!=null&&getQueryStringRegExp("content")!=""){
                scope.model=true;
            }
            var reloadFunc = function(){window.location.reload()};
            loginObj.init(scope,$interval,reloadFunc,reloadFunc).bind();
            scope.menuItenmenus={},scope.loadStatus={},scope.loadError={};
            scope.$on('collect-callback',function(e){
                scope.errorIcon = e.targetScope.errorIcon;
                scope.errorMsg = e.targetScope.errorMsg;
                scope.showErrorMsg = true;
            })
        }]);
       /* app.directive("viewCheck",function(){
            return {
                restrict:"C",
                link;function($scope,element,attrs){
                    var ele=angular.element(element);
                    ele.on('click',function(){
                        var elemen=document.getElementsByClassName("review-item"),num=0;
                        for(i=0;i<elemen.lenght;i++){
                            if(elemen[i].style.display=="none"){
                                num++;
                            }
                        };
                        if(num==elemen.length){
                           $scope.reviewIte.=true;
                        }
                    });
                };
            };
        });*/
    </script>
    <script>
        var favoriteUrl = "/ajax/restaurant/0/favorite/";
    </script>
    <script src="{{asset('Home/js/favorite.js')}}"></script>

    
    <script>angular.bootstrap(document, ["app"]);</script>

    <!-- Baidu Analytics -->


</body>
</html>
