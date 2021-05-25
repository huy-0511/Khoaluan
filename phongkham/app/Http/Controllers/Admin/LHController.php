<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\lichhen;
use App\Models\dichvu;
use App\Models\User;
use App\Models\bacsi;
class LHController extends Controller
{
	public function __construct()
    {
        $this->middleware('checklogin');
    }
    public function list_lichhen()
    {
    	$data = lichhen::orderBy('id','DESC')->paginate(5);
    	$taikhoan = User::all();
    	return view('Backend/lichhen/list',compact('data','taikhoan'));
    }
    public function chitiet($id)
    {
        $dichvu = dichvu::all();
        $data = lichhen::find($id);
        $taikhoan = User::all();
        $bacsi = bacsi::all();
        return view('Backend/lichhen/chitietlichhen',compact('data','dichvu','taikhoan','bacsi'));
    }
    public function post_chitiet(Request $request)
    {
        $data = $request->all();
        $confirm_lichhen = lichhen::find($data['id']);
        $confirm_lichhen['trangthai'] = $data['trangthai'];
        $confirm_lichhen->save(); 
    }
}
