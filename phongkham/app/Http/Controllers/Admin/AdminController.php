<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\bacsi;
use App\Models\lichhen;
class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('checklogin');
    }
    public function index()
    {
        $data = User::where('level',1)->get();
        $count = count($data);
        $doctor = bacsi::all();
        $count_doctor = count($doctor);
        $schedule = lichhen::where('trangthai','=','Đã xác nhận')->get();
        $count_schedule = count($schedule);
        $lichchuaxacnhan = lichhen::where('trangthai','=','Đang chờ xác nhận')->get();
        $count_lichchuaxacnhan = count($lichchuaxacnhan);
    	return view('Backend/index',compact('count','count_doctor','count_schedule','count_lichchuaxacnhan'));
    }
    public function profile()
    {
        $id = Auth::user()->idtaikhoan;
        $user = User::where('idtaikhoan',$id)->get();
        
        return view('Backend/profile',compact('user'));
    }
    public function update_profile(Request $request)
    {
    	$id = Auth::user()->idtaikhoan;
        $getUser = User::find($id);
  
        $data = $request->all();

        // $data['password'] = bcrypt($request->password);
       if (empty($data['password'])) {
            $data['password'] = $getUser['password'];
        }else{
            $data['password'] = bcrypt($data['password']);
        }
        // dd($data);
        $getUser->update($data);
        return redirect()->back()->with('success', __('Cập nhật thành công.'));
    }
}
