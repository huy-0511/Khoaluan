<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\dichvu;
use App\Models\lichhen;
use App\Models\bacsi;
use App\Models\tintuc;
use Carbon\Carbon;
use Mail;
class UserController extends Controller
{
    public function index()
    {
    	return view('Frontend/index1');
    }
    public function contact()
    {
        return view('Frontend/lienhe');
    }
    public function chitietbacsi1()
    {
        return view('Frontend/chitietbacsi1');
    }
    public function chitietbacsi2()
    {
        return view('Frontend/chitietbacsi2');
    }
    public function chitietbacsi3()
    {
        return view('Frontend/chitietbacsi3');
    }
    public function thongtincanhan()
    {
    	$id = Auth::User()->idtaikhoan;
    	$user = User::where('idtaikhoan',$id)->get();
    	return view('Frontend/qlttcn1',compact('user'));
    }
    public function update_thongtincanhan(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:15',
            'email'=>'required',
            'password'=>'min:6',
            'diachi'=>'required',
            'sdt'=>'required',
            'ngaysinh'=>'required|regex:/\d{1,2}\/\d{1,2}\/\d{4}/',
        ],[
            'name.required'=>'Dữ liệu không được bỏ trống',
            'name.min'=>'Bạn phải nhập trên 3 ký tự',
            'name.max'=>'Bạn không được nhập quá 15 ký tự',
            'email.required'=>'Dữ liệu không được bỏ trống',
            'password.min'=>'Mật khẩu phải có ít nhất 6 ký tự',
            'diachi.required'=>'Dữ liệu không được bỏ trống',
            'sdt.required'=>'Dữ liệu không được bỏ trống',
            'ngaysinh.required'=>'Dữ liệu không được bỏ trống',
            'ngaysinh.regex'=>'Định dạng ngày sinh không hợp lệ',
        ]);
        $id = Auth::user()->idtaikhoan;
        $getUser = User::find($id);
        // dd($getUser['password']);
        $data = $request->all();
        // $data['password'] = bcrypt($request->password);

       if (empty($data['password'])) {
            $data['password'] = $getUser['password'];
        }else{
            $data['password'] = bcrypt($data['password']);
        }
        dd($data);
        // dd($data['password']);
        $getUser->update($data);
        return redirect()->back()->with('success', __('Cập nhật thành công.'));
       
    }
    public function xemlichhen()
    {
    	$id = Auth::user()->idtaikhoan;
    	$user = User::where('idtaikhoan',$id)->get();
    	$lichhen = lichhen::where('idtaikhoan',$id)->get();
    	$dichvu = dichvu::all();
        $bacsi = bacsi::all();
    	return view('Frontend/xemlichhen1',compact('lichhen','user','dichvu','bacsi'));
    }
    public function quenmatkhau()
    {
        return view('Frontend/quenmatkhau/forget-pass');
    }
    public function recover_pass(Request $request)
    {
        $request->validate([
            'email_user'=>'required|ends_with:@gmail.com',
        ],[
            'email_user.required'=>'Dữ liệu không được bỏ trống',
            'email_user.ends_with'=>'Nhập không đúng định dạng email',
        ]);
        $data = $request->all();
        
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Lấy lại mật khẩu".' '.$now;
        $user = User::where('email','=',$data['email_user'])->get();
        foreach ($user as $key => $value) {
           $id = $value->idtaikhoan;
        }
            $count_user = $user->count();
            if ($count_user == 0) {
                return redirect()->back()->withErrors('Email của bạn chưa được đăng ký hoặc không trùng với email trước đó bạn đã đăng kí.');
            }else{
                $token_random = Str::random();
                $user = User::find($id);
                $user->remember_token = $token_random;
                $user->save();

                //send mail
                $to_email = $data['email_user'];
                $link_reset_pass = url('/update-new-pass?email='.$to_email.'&token='.$token_random);
                $data = array("name"=>$title_mail,"body"=>$link_reset_pass,'email'=>$data['email_user']);
                //  Mail::send('frontend/login/forget_pass_notify',['data'=>$data],function($message) use ($title_mail,$data){
                //     $message->to($data['email'])->subject($title_mail);
                //     $message->from($data['email'],$title_mail);
                // });

                Mail::send('Frontend/quenmatkhau/forget-pass-notify',[
                     'data'=>$data,
                ],function($message) use($title_mail,$data){
                    $message->to($data['email'])->subject($title_mail);
                    $message->from('phamnguyendinhhuy.mcs@gmail.com','Phòng khám nha khoa');
                });
                return redirect()->back()->with('success', __('Gửi mail thành công, vui lòng vào gmail để reset password'));
            }
        
    }
    public function update_new_pass()
    {
        return view('Frontend/quenmatkhau/new-pass');
    }
    public function reset_new_pass(Request $request) //đoạn này á
    {
        $request->validate([
            'pass_user'=>'required|min:6'     
        ],[
            'pass_user.required'=>'Vui lòng bạn nhập mật khẩu mới vào chỗ trống !!!',
            'pass_user.min'=>'Mật khẩu phải có ít nhất 6 ký tự',
        ]);
        $data = $request->all();
        $token_random = Str::random();
        $user = User::where('email','=',$data['email'])->where('remember_token','=',$data['token'])->get();
        $count = $user->count();
        if ($count > 0) {
            foreach ($user as $key => $value) {
                $id = $value->idtaikhoan;
            }
            $reset = User::find($id);
            // if (empty($data['pass_user'])) {
            //     $reset->password = $user['password'];
            // }else{
            //     $reset->password = bcrypt($data['pass_user']);
            // }
            $reset->password = bcrypt($data['pass_user']);
            $reset->remember_token = $token_random;
            $reset->save();
            return redirect('/khachhang/dangnhap')->with('success', __('Mật khẩu đã cập nhật mới. '));
        }else{
            return redirect('/quenmatkhau')->withErrors('Vui lòng nhập lại email vì link đã quá hạn');
        }
    }
}
