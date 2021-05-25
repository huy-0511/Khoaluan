<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use App\Models\User;
use Session;
class LoginController extends Controller
{
    public function get_login()
    {
    	return view('Backend/login');
    }
    public function post_login(Request $request){
        // $request->validate([
        //      'email'=>'required',
        //      'password'=>'required',   
        // ],[
        //     'email.required'=>'Bạn phải nhập email vào',
        //     'password.required'=>'Bạn phải nhập password vào',
        // ]);

    	$login = [
    		'email' => $request->email,
    		'password' => $request->password,
    		'level'=> 0,
    	];
        $remember = $request->has('remember') ? true : false;
    	if (Auth::attempt($login,$remember)) {
    		return redirect('/dashboard');
    	}else{
    		return redirect('/login');
    	}
  /*  	$User = $request->adminUser;	
    	$Pass = md5($request->adminPass);
    	$result = Admin::where('adminUser',$User)->where('adminPass',$Pass)->where('level',0)->first();
    	if ($result) {
    		Session::put('adminName',$result->adminName);
    		Session::put('adminId',$result->adminId);
    		Session::put('level',$result->level);
    		return redirect::to('/dashboard');
    	}else{
    		Session::put('message','mật khẩu hoặc tài khoản của bạn đã bị sai.Làm ơn nhập lại');
    		return redirect()->back()->withErrors('Tài khoản hoặc mật khẩu của bạn đã bị sai.Xin mời nhập lại');
    	}*/
    }
    public function get_register()
    {
    	return view('Backend/register');
    }
    public function post_register(Request $request){
        // $request->validate([
        //      'name'=>'required',
        //      'email'=>'required',
        //      'phone'=>'required',
        //      'password'=>'required',   
        // ],[
        //     'name.required'=>'Bạn phải nhập name vào',
        //     'email.required'=>'Bạn phải nhập email vào',
        //     'phone.required'=>'Bạn phải nhập số điện thoại vào',
        //     'password.required'=>'Bạn phải nhập password vào',
        // ]);
    	$data = $request->all();
    	$data['password'] = bcrypt($data['password']); //hoặc bcrypt mã hóa mât khẩu
    	$data['level'] = 0;
    	if(User::create($data)){
    		  return redirect()->back()->with('success', __('Đăng kí thành công.'));
        } else {
            return redirect()->back()->withErrors('Đăng kí bị lỗi.');
    	}
    }
    public function logout()
    {
    	Auth::logout();
        return redirect('/login');
    }
}
