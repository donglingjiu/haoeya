<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\cart ;
use App\Model\address ;
use App\Model\shop ;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order()
    {
        //加载用户下订单页面 点击购物车结算过来的
        $uid = 5 ;//用户id
        $id = 1 ; //购物车id
        /*
            应该是点击结算  购物信息存储在redis里面
            提交订单之后  再写入数据库
        */
        /*//购物车表添加数据
        $tmp = [] ;
        //食品名称
        $goodsName = ['北京鸭梨','京白梨','白鸡','烧鸭','油鸡','果脯','北京蜂王精','北京秋梨膏','茯苓夹饼','北京酥糖','六必居酱菜','北京织毯','北京雕漆','景泰蓝','北京玉器','内画壶','北京葡萄酒','北京白凤龙','安宫牛黄丸','虎骨酒','京绣','桃补花','涮羊肉','北京酸菜','大磨盘柿','密云金丝小枣','少峰山玫瑰花','门头沟大核桃','凉皮','岐山哨子面','牛羊肉泡馍','荞面饸饹','陕西蒜沾面','BIANG BIANG面','杨凌蘸水面','贾三灌汤包','槐花麦饭','洋芋擦擦','八宝甑糕','油馍','肉夹馍','黄桂柿子饼','搅团','浆水面','玫瑰镜糕','面鱼子','葫芦头','南汇水蜜桃','三林糖酱瓜','佘山兰笋','松江回鳃鲈','枫泾西蹄','城隍庙五香豆','崇明金瓜','南桥乳腐','高桥松饼','嘉定大白蒜','嘉定竹刻','崇明水仙花','硕绣','兰印花布','张江腰菱','南翔小笼馒头','鼎日有福建肉松','新长发糖炒栗子','稻香村鸭肫肝','浦东三黄鸡'] ;
        for($i = 0; $i <= 20; $i++) {
            $tmp['uid'] = 5 ;
            $tmp['sid'] = mt_rand(1,10) ;
            //食品单价
            $tmp['price'] = mt_rand(1,100) . '&' . mt_rand(1,100) . '&' . mt_rand(1,100) . '&' . mt_rand(1,100) . '&' . mt_rand(1,100) ;
            //食品数量
            $tmp['goodsAmount'] = mt_rand(1,5) . '&' . mt_rand(1,5) . '&' . mt_rand(1,5) . '&' . mt_rand(1,5) . '&' . mt_rand(1,5) ;
            //食品名称
            $tmp['goodsName'] = $goodsName[mt_rand(0,66)] . '&' . $goodsName[mt_rand(0,66)] . '&' .$goodsName[mt_rand(0,66)] . '&' . $goodsName[mt_rand(0,66)] . '&' . $goodsName[mt_rand(0,66)] ;
            //小计
            $tmp['subtotal'] = mt_rand(10,500) . '&' . mt_rand(10,500) . '&' . mt_rand(10,500) . '&' . mt_rand(10,500) . '&' . mt_rand(10,500) ;
            //实际支付
            $tmp['payment'] = mt_rand(1000,999999) ;
            //插入数据库
            cart::insert($tmp) ;

        }*/
        //根据uid查询address表  查询地址信息
       /* //用户地址表  插入数据
        $tmp = [] ;
        $ad = ['昌平区','海淀区','朝阳区','丰台','西城区'] ;
        //详细地址
        $add = ['天坛','地坛','回龙观','天通苑','北苑'] ;
        $name = ['葫芦娃' ,'阿童木','食尸鬼','犬夜叉','钢铁人'] ;
        for($i = 0; $i < 20; $i++) {
            //用户id
            $tmp['uid'] = mt_rand(1,5) ;
            //自动地址
            $tmp['autoAddr'] = '北京市' . $ad[mt_rand(0,4)] ;
            //详细地址
            $tmp['detailAddr'] = $add[mt_rand(0,4)] . mt_rand(0,1000) . '号' ;
            //收货人姓名
            $tmp['recName'] = $name[mt_rand(0,4)] ;
            //收货人电话
            $tmp['recPhone'] = '1'.mt_rand(30000,99999).mt_rand(30000,99999) ;
            //写入地址表
            address::insert($tmp) ;

        }*/

        //根据uid 查询address表
        $addrs = address::where('uid',$uid)->get() ; 
        //dump($addrs) ;
        //根据id查询cart表 获取购物车商品信息
        //备注  填写完保存订单表
        //商品名
        $goodsName = cart::where('id',$id)->value('goodsName') ;
        $goodsNames = explode('&',$goodsName)  ;
        //数量
        $goodsAmount = cart::where('id',$id)->value('goodsAmount') ;
        $goodsAmounts = explode('&',$goodsAmount) ;

        //单价
        $price = cart::where('id',$id)->value('price') ;
        $prices = explode('&',$price) ;
        //小计
        $subtotal = cart::where('id',$id)->value('subtotal') ;
        $subtotals = explode('&',$subtotal) ;
        //总计
        $payment = cart::where('id',$id)->value('payment') ;
      /*  dump($goodsNames) ;
        dump($goodsAmounts) ;
        dump($prices) ;
        dump($subtotals) ;
        dump($payment) ;*/
        //根据店铺id sid=1 查询店铺配送费
        $sid = 1 ;
        $deliPrice = shop::where('id',$sid)->value('deliPrice') ;
        return view('Home.Order.order',['addrs'=>$addrs,'id'=>$uid,'goodsNames'=>$goodsNames,'goodsAmounts'=>$goodsAmounts,'prices'=>$prices,'subtotals'=>$subtotals,'payment'=>$payment,'deliPrice'=>$deliPrice]) ;
    }
    //加载新增地址页面
    public function order_add(Request $req) 
    {
        $id = $req->input('id') ;
        return view('Home.Order.order_add',['id'=>$id]) ;
    }
    //执行地址添加
    public function order_insert(Request $req) 
    {
        $id = $req->input('id') ;
        //收货人姓名
        $recName = $req->input('recName') ;
        //收货人电话
        $recPhone = $req->input('recPhone') ;
        //收货人地址
        $detailAddr = $req->input('detailAddr') ;

        //写入 address数据库
        $res = address::insert(['recName'=>$recName,'recPhone'=>$recPhone,'detailAddr'=>$detailAddr,'uid'=>$id]) ;
        if($res) {
            echo '添加成功' ;
        }else {
            echo '添加失败' ;
        }

    }
    //地址删除
    public function order_del(Request $req) 
    {
        $id = $req->input('id') ;
        // echo $id ;
        //根据id 删除address记录
        $res = address::where('id',$id)->delete() ;
        if($res) {
            echo '删除成功' ;
        }else {
            echo '删除失败' ;
        }
    }
    //地址修改
    public function order_edit(Request $req) 
    {   
        $id = $req->input('id') ;
        //根据id 查询地址信息
        $data_edit = address::where('id',$id)->get() ;
        return $data_edit ;
    }
    //执行地址修改
    public function order_update(Request $req) 
    {
        $id = $req->input('id') ;
        $detailAddr = $req->input('detailAddr') ;
        $recName = $req->input('recName') ;
        $recPhone = $req->input('recPhone') ;

        //echo  $id . ' ' . $detailAddr . ' ' . $recName . ' ' . $recPhone ;
        $res = address::where('id',$id)->update(['recName'=>$recName,'recPhone'=>$recPhone,'detailAddr'=>$detailAddr]) ;
       if($res) {
            echo '修改成功' ;
        }else {
            echo '修改失败' ;
        }
    }


    //加载下单成功页面order_success
     public function order_success()
    {
        //加载用户下订单页面
        return view('Home/Order/order_success') ;
    }

    
}
