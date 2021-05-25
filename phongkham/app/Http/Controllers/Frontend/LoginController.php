<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\taikhoan;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
class LoginController extends Controller
{
    public function dangki()
    {
    	return view('Frontend/dangki1');
    }
    public function post_dangki(Request $request)
    {
        $request->validate([
            'name'=>'required|max:15|alpha',
            'email'=>'required|email|ends_with:@gmail.com|unique:users,email',
            'sdt'=>'required|numeric|min:10',
            'ngaysinh'=>'required',
            'diachi'=>'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ],[
            'name.required'=>'Dữ liệu không được bỏ trống',
            'name.alpha'=>'Tên chỉ có thể chứa các chữ cái.',
            'email.required'=>'Dữ liệu không được bỏ trống',
            'email.ends_with'=>'Email nhập không đúng định dạng',
            'email.unique'=>'Email của bạn đã bị trùng',
            'sdt.required'=>'Dữ liệu không được bỏ trống',
            'sdt.numeric'=>'Số điện thoại phải là 1 số',
            'ngaysinh.required'=>'Dữ liệu không được bỏ trống',
            'diachi.required'=>'Dữ liệu không được bỏ trống',
            'password.required_with'=>'Dữ liệu không được bỏ trống',
            'password.same'=>'Xác nhận mật khẩu không đúng',
            'password.min'=>'Mật khẩu phải có ít nhất 6 ký tự',
        ]);
      
    	$data = $request->all();
        if ($data['password_confirmation'] == $data['password']) {
            $data['password'] = bcrypt($data['password']); //hoặc bcrypt mã hóa mât khẩu
        }
    	
    	$data['level'] = 1;
    	            
            if(User::create($data)){
              return redirect()->back()->with('success', __('Đăng kí thành công.'));
            } else {
                return redirect()->back()->withErrors('Đăng kí bị lỗi.');
            }
       
    }
    public function dangnhap()
    {
    	return view('Frontend/dangnhap1');
    }
    public function post_dangnhap(Request $request)
    {
        $request->validate([
            'email'=>'required|email|ends_with:@gmail.com',
            'password'=>'required|min:3|max:20',
        ],[
            'email.required'=>'Dữ liệu không được bỏ trống',
            'email.ends_with'=>'Nhập không đúng định dạng email',
            'password.required'=>'Dữ liệu không được bỏ trống',
        ]);
    	$login = [
    		'email' => $request->email,
    		'password' => $request->password,
    		'level'=> 1,
    	];
        $remember = $request->has('remember') ? true : false;
    	if (Auth::attempt($login,$remember)) {
    		return redirect('/trangchu');
    	}else{
    		return redirect()->back()->with('alert','Tài khoản hoặc mật khẩu của bạn không đúng !!!');  
    	}
    }
    public function get_logout()
    {
    	Auth::logout();
        return redirect('/khachhang/dangnhap');
    }
}
