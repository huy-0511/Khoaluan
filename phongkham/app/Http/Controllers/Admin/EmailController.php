<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Models\lichhen;
use App\Models\User;
class EmailController extends Controller
{
    public function create()
    {
        return view('Backend/email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ],[
            'email.required'=>'Dữ liệu không được bỏ trống',
            'subject.required'=>'Dữ liệu không được bỏ trống',
            'name.required'=>'Dữ liệu không được bỏ trống',
            'content.min'=>'Dữ liệu không được bỏ trống',
        ]);
        $data = $request->all();
        $email = User::where('email',$data['email'])->first();
        if (!$email) {
            return back()->with(['error' => 'Email bạn nhập không trùng với email của khách hàng.']); 
        }else{
             Mail::send('Backend/email-template',[
             'subject' => $request->subject,
              'name' => $request->name,
              'email' => $request->email,
              'content' => $request->content,
            ],function($mail) use($request){
                $mail->to($request->email,$request->name);
                $mail->from('phamnguyendinhhuy.mcs@gmail.com','Admin');
                $mail->subject('Nha Khoa DTU');
            });

            return back()->with(['message' => 'Email được gửi thành công']);
        }
        // $data = [
        //   'subject' => $request->subject,
        //   'name' => $request->name,
        //   'email' => $request->email,
        //   'content' => $request->content
        // ];	
        
       
    }
}
