<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('checklogin');
    }
    public function list_tk()
    {
    	$data = User::where('level',1)->get();
        $count = count($data);
    	return view('Backend/user/list',compact('data','count'));
    }
    public function edit_taikhoan($id)
    {
    	$data = User::find($id);
    	return view('Backend/user/edit',compact('data'));
    }
    public function update_taikhoan(Request $request,$id)
    {
    	$request->validate([
            'name'=>'required|max:15',
            'email'=>'required',
            'password'=>'required|min:6',
            'diachi'=>'required',
            'sdt'=>'required',
            'ngaysinh'=>'required|regex:/\d{1,2}\/\d{1,2}\/\d{4}/',
        ],[
            'name.required'=>'Dữ liệu không được bỏ trống',
            'email.required'=>'Dữ liệu không được bỏ trống',
            'password.required'=>'Dữ liệu không được bỏ trống',
            'password.min'=>'Mật khẩu phải có ít nhất 6 ký tự',
            'diachi.required'=>'Dữ liệu không được bỏ trống',
            'sdt.required'=>'Dữ liệu không được bỏ trống',
            'ngaysinh.required'=>'Dữ liệu không được bỏ trống',
            'ngaysinh.regex'=>'Định dạng ngày sinh không hợp lệ',
        ]);
        $getUser = User::find($id);
        $data = $request->all();
   		if (empty($data['password'])) {
            $data['password'] = $getUser['password'];
        }else{
             $data['password'] = bcrypt($data['password']);
        }
        $getUser->update($data);
        return redirect()->back()->with('success', __('Update success.'));
    }
    public function delete_taikhoan($id)
    {
    	$delete = User::find($id)->delete();
    	if($delete){
            return redirect('/quanlytaikhoan')->with('success', __('Delete success'));
        }else{
            return redirect()->back()->withErrors('Delete error.');
        }
    }
    
}
