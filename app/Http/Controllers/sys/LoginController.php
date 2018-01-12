<?php

namespace App\Http\Controllers\sys;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder; //验证码
use session;
use App\Model\user_log;
use Hash;
class LoginController extends Controller
{	

	//系统后台登入页面
     public function index()
    {
        return view('system.login.login');
       
    }

    //执行后台登入的方法
    public function login(Request $request)
    {
        
        //获取提交数据
        $log = $request->except('_token');
        
        //查询登入的信息
        $res = user_log::where('userName',$log['userName'])->first();

        //判断提交是否为空
        if(empty($res['userName'] or $res['passWord'] or $res['code'])){
            echo '<script>alert("提交不能为空");location.href="/sys/do"</script>'; 
        }
        
        //判断是否有权限登入
        if(!($res->Userlogin->auth == 1)){

            echo '<script>alert("抱歉权限不够");location.href="/sys/do"</script>';
        }

        //判断用户名是否存在
        if(!($res['userName'] == $log['userName'])){
         
            echo '<script>alert("用户名不存在");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }

        //判断密码是否正确
        // if(!(Hash::check($res['passWord']) == $log['passWord'])){
        //     return redirect('/sys/do');
        // }

        //判断验证码
        if(!(session('code') == $log['code'])){

            echo '<script>alert("验证码不正确");location.href="/sys/do"</script>';
        }

        //将登入成功的用户id存入session 
        session(['id'=>$res['id']]);

        return redirect('/sys/index');
    	
    }

    //加载验证码
    public function code()
    {
    	$builder = new CaptchaBuilder; //实例化验证码
		$builder -> build(); //生成验证码
		session(['code'=>$builder->getPhrase()]); //获取验证码内容存入session
        header('Content-type:image/jpeg'); 
		$builder ->output();
    }

}