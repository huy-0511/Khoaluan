<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\dichvu;
use App\Models\lichhen;
use App\Models\bacsi;
use App\Models\User;
use Carbon\Carbon; 
class DatlichController extends Controller
{
    public function datlich()
    {
    	$dichvu = dichvu::all();
        $bacsi = bacsi::all();
        // if (Auth::check()) {
            
        // }else{
        //     return view('Frontend/dangnhap1');
        // }
    	return view('Frontend/datlich1',compact('dichvu','bacsi'));
    }
    public function post_datlich(Request $request)
    {
    // 	$code = md5(time());
        $request->validate([
            'ngay'=>'required',
            'gio'=>'required', 
            'iddichvu'=>'required',
            'idbacsi'=>'required',
            'mota'=>'required',     
        ],[
            'ngay.required'=>'Dữ liệu không được bỏ trống',
            'gio.required'=>'Dữ liệu không được bỏ trống',
            'iddichvu.required'=>'Dữ liệu không được bỏ trống',
            'idbacsi.required'=>'Dữ liệu không được bỏ trống',
            'mota.required'=>'Dữ liệu không được bỏ trống',
        ]);
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $code = substr(md5(microtime()), rand(0,26),5);//tạo random chữ và số bất kì và lấy 5 chữ số bất kỳ để tạo mỗi đơn hàng là 1 mã riêng 
    	$id = Auth::user()->idtaikhoan;
    	$data = $request->all();
        $giohientai =  Carbon::now()->toTimeString();
    	$ngayhientai = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
       
    	// $giohientai =  Carbon::now('Asia/Ho_Chi_Minh')->toTimeString();
        // $aaa =   Carbon::now()->isFuture();
        // dd($aaa);
        
        $tomorrow = Carbon::tomorrow('Asia/Ho_Chi_Minh')->hour;
        $dayTomorrow = Carbon::tomorrow('Asia/Ho_Chi_Minh')->toDateString();
        
    	$data['trangthai'] = 'Đang chờ xác nhận';
    	 // $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
    	$test_slot = lichhen::where('gio',$data['gio'])->where('ngay',$data['ngay'])->get()->toArray();
        $count_slot = count($test_slot);  
        $doctor = lichhen::where('idbacsi',$data['idbacsi'])->where('gio',$data['gio'])->where('ngay',$data['ngay'])->get()->toArray();
        foreach ($doctor as $key => $value) {
           $nameDoctor = $value['idbacsi'];
           $gio = $value['gio'];
           $ngay = $value['ngay'];
        }
        $count_doctor = count($doctor);

        $id_user = Auth::user()->idtaikhoan;
       
        $aaa = lichhen::where('idtaikhoan',$id_user)->where('gio',$data['gio'])->where('ngay',$data['ngay'])->get();
        $count_time = count($aaa);
        // foreach ($test as $key => $value) {
        //    $time = $value['gio'];
        //    // $count_time = count($time);
        //    dd($time);
        // }
        // dd(Carbon::tomorrow());
        // dd($data);   
    	if ($data['ngay'] > $ngayhientai) {
             if ($count_slot >= 2) {
             return redirect()->back()->with('alert','Hiện tại khung giờ này đã đủ chỗ, vui lòng bạn chọn giờ khác.');
            }else{
                if ($count_time == 1) {
                    return redirect()->back()->with('alert','Hiện tại bạn đã có lịch giờ này,bạn vui lòng đặt lịch vào giờ khác.');   
                }else{
                      if ($count_doctor >= 1) {
                    return redirect()->back()->with('alert','Hiện tại bác sĩ bạn chọn đã có lịch khám. Vui lòng chọn bạn sĩ khác để khám.');      
                    }else{
                          $lichhen = new lichhen();
                         $lichhen['code'] = $code;
                         $lichhen['iddichvu'] = $data['iddichvu'];
                         $lichhen['ngay'] = $data['ngay'];
                         $lichhen['gio'] = $data['gio'];
                         $lichhen['trangthai'] = $data['trangthai'];
                         $lichhen['mota'] = $data['mota'];
                         $lichhen['idbacsi'] = $data['idbacsi'];
                         $lichhen['idtaikhoan'] = $id;
                         // dd($lichhen);
                         $lichhen->save(); // đây nè
                          if($lichhen){
                             return redirect()->back()->with('success', __('Đặt lịch thành công.'));
                            }else{
                             return redirect()->back()->withErrors('Đặt lịch thất bại.');
                            }   
                    }
                }
                
            }   
        }
        if ($data['ngay'] >= $ngayhientai && $data['gio'] > $giohientai) {
            if ($count_slot >= 2) {
             return redirect()->back()->with('alert','Hiện tại khung giờ này đã đủ chỗ, vui lòng bạn chọn giờ khác.');
            }else{
               if ($count_time == 1) {
                    return redirect()->back()->with('alert','Hiện tại bạn đã có lịch giờ này,bạn vui lòng đặt lịch vào giờ khác.');
               }else{
                    if ($count_doctor >= 1) {
                    return redirect()->back()->with('alert','Hiện tại bác sĩ bạn chọn đã có lịch khám. Vui lòng chọn bạn sĩ khác để khám.');      
                    }else{
                          $lichhen = new lichhen();
                         $lichhen['code'] = $code;
                         $lichhen['iddichvu'] = $data['iddichvu'];
                         $lichhen['ngay'] = $data['ngay'];
                         $lichhen['gio'] = $data['gio'];
                         $lichhen['trangthai'] = $data['trangthai'];
                         $lichhen['mota'] = $data['mota'];
                         $lichhen['idbacsi'] = $data['idbacsi'];
                         $lichhen['idtaikhoan'] = $id;
                         // dd($lichhen);
                         $lichhen->save(); // đây nè
                          if($lichhen){
                             return redirect()->back()->with('success', __('Đặt lịch thành công.'));
                            }else{
                             return redirect()->back()->withErrors('Đặt lịch thất bại.');
                            }   
                    }
               }
            }      
   
        }else{             
               if ($giohientai > 18) {
                      return redirect()->back()->with('alert','Sau 18h là kết thúc giờ làm việc của chúng tôi, xin vui lòng bạn đặt lịch vào ngày mai. Xin cảm ơn bạn !!!');
                }else{
                     return redirect()->back()->with('alert','Bạn vui lòng đặt lịch sau '.$giohientai);
                }

        }
    }
}
