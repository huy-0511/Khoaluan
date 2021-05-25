<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bacsi;
class DoctorController extends Controller
{
    public function list_basi()
    {
    	$data = bacsi::all();
    	// $count = count($data);
    	// for ($i=1; $i < $count; $i++) { 
    	// 	$data['id'] = $i;
    	// }
    	return view('Backend/bacsi/list',compact('data'));
    }
    public function add_basi()
    {	
    	return view('Backend/bacsi/add');
    }
    public function create_basi(Request $request)
    {
    	$request->validate([
            'hoten'=>'required|max:20|unique:tbl_doctor,hoten',
            'hocvan'=>'required',
            'cacchungchidacbiet'=>'required',
            'hinhanh'=>'required',
        ],[
            'hoten.required'=>'Dữ liệu không được bỏ trống',
            'hoten.max'=>'Nhập không được quá 20 kí tự',
            'hoten.unique'=>'Dữ liệu đã bị trùng',
            'hocvan.required'=>'Dữ liệu không được bỏ trống',
            'cacchungchidacbiet.required'=>'Dữ liệu không được bỏ trống',
            'hinhanh.required'=>'Dữ liệu không được bỏ trống',
        ]);
    	$data = $request->except('_token','hinhanh');
        if($request->hinhanh){
            $image = upload_image('hinhanh');
            if($image['code'] == 1){
                $data['hinhanh'] = $image['name'];
            }
        }
        $id = bacsi::insertGetId($data);
        return redirect()->back()->with('success', __('Create success.'));
    }
    public function delete_basi($id)
    {
    	$delete = bacsi::find($id)->delete();
    	$data = bacsi::all();
        if($delete){
            return redirect('/hosobacsi')->with('success', __('Delete success'));
        }else{
            return redirect()->back()->withErrors('Delete error.');
        }
    }
    public function edit_basi($id)
    {
    	$data = bacsi::find($id);
    	return view('Backend/bacsi/edit',compact('data'));
    }
    public function update_basi(Request $request,$id)
    {
    	$request->validate([
            'hoten'=>'required|max:20',
            'hocvan'=>'required',
            'cacchungchidacbiet'=>'required',
        ],[
            'hoten.required'=>'Dữ liệu không được bỏ trống',
            'hoten.max'=>'Nhập không được quá 20 kí tự',
            'hocvan.required'=>'Dữ liệu không được bỏ trống',
            'cacchungchidacbiet.required'=>'Dữ liệu không được bỏ trống',
        ]);
        $get_data = bacsi::find($id);
    	$data = $request->except('_token','hinhanh');
        if($request->hinhanh){
            $image = upload_image('hinhanh');
            if($image['code'] == 1){
                $data['hinhanh'] = $image['name'];
            }
        }
        $get_data->update($data);
        return redirect()->back()->with('success', __('Update success.'));
    }
}
