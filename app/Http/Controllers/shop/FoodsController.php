<?php

namespace App\Http\Controllers\shop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\food;
use DB;
use App\Model\system;
use App\Http\Requests\FoodRequest;

class FoodsController extends Controller
{
    
    //菜品列表
    public function index(Request $request)
    {   
        $search = $request->input('search');
        $keywords = $request->input('keywords');
        $cateName = ['早餐','午餐','晚餐','宵夜'];
        $requestall = $request->all();
        if(!empty($search)){
            $data = food::where('uid',1)->where($search,'like','%'.$keywords.'%')->orderby('sort','asc')->paginate(5); 
        }else{
            $data = food::where('uid',1)->orderby('sort','asc')->paginate(5);//??????????
        }
        return view('shop.foods.index',['data'=>$data,'request'=>$requestall,'cateName'=>$cateName]);
    }


    //跳转到食物增加页面
    public function create()
    {   
        $cateName = ['早餐','午餐','晚餐','宵夜']; //??????????
        return view('shop.foods.add',['cateName'=>$cateName]);
    }

    //执行食物的添加
    public function store(FoodRequest $request)
    {   
        //判断是否上传图片
        $pic = $request -> file('picture');
        $res = false;
        $filename = '';
        if(!empty($pic)){
            //2.获取文件后缀名
            $hz = $pic->getClientOriginalExtension();
            //3.随机文件名字
            $temp_name = md5(time()+rand(10000,99999));
            //4.拼接
            $filename = $temp_name.'.'.$hz;
            $path = $pic->getRealPath();
            
            //文件上传
            $disk = \Storage::disk('qiniu');
            $res = $disk->put('/shop/foods/'.$filename,file_get_contents($path));
        }
        
        $data = $request->except(['_token']);
        //若图片上传到云,则写入数据库
        if($res){
            $data['picture'] = $filename;
        }
        $data['uid'] = 1; //??????????
        
        $res = food::insert($data);
        if($res){
           echo 1;
        }else{
           echo 2; 
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    //编辑菜品
    public function edit($id)
    {
        $data = food::where('id',$id)->first();
        $cate = '早餐';//?????????
        $uid = $data->uid;
        $cateName = system::where('id','!=','uid')->get();//?????????
        return view('/shop/foods/edit',['data'=>$data,'cate'=>$cate,'cateName'=>$cateName,'uid'=>$uid]);
    }

    //更新菜品
    public function update(FoodRequest $request, $id)
    {   
        $data = $request->except(['_token','_method']);

        $res = food::where('id',$id)->update($data);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }


    public function destroy($id)
    {
        $res = food::where('id',$id)->delete();
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function chengePicture(Request $request)
    {
      // 更是食物图片 1.获取文件
          $pic = $request -> file('photo');
          $id = $request->input('id');
          if(!empty($pic)){
              //2.获取文件后缀名
              $hz = $pic->getClientOriginalExtension();
              //3.随机文件名字
              $temp_name = md5(time()+rand(10000,99999));
              //4.拼接
              $filename = $temp_name.'.'.$hz;
              $path = $pic->getRealPath();
              
              //文件上传
              $disk = \Storage::disk('qiniu');
              $res = $disk->put('/shop/foods/'.$filename,file_get_contents($path));

              if($res){
                  $picture = food::where('id',$id)->value('picture');
                  if($picture != 'foods.jpg'){
                      $disk->delete("/shop/foods/".$picture);
                  }
                  $res = food::where('id',$id)->update(['picture'=>$filename]);
                  if($res){
                      echo $filename;
                  }else{
                      echo 'foods.jpg';
                  }
              }
              
          }else{
            echo 0;  
          }
        
    }


}
