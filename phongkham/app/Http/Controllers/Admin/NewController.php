<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tintuc;
class NewController extends Controller
{
    public function __construct()
    {
        $this->middleware('checklogin');
    }
    public function list_tintuc()
    {
    	$new = tintuc::orderBy('idtintuc','DESC')->paginate(5);
    	return view('Backend/tintuc/list',compact('new'));
    }
    public function add_tintuc()
    {
    	$new = tintuc::all();
    	return view('Backend/tintuc/add');
    }
    public function post_tintuc(Request $request)
    {
        $request->validate([
            'tentintuc'=>'required|unique:tbl_tintuc,tentintuc',
            'motatintuc'=>'required',
            'noidungtintuc'=>'required',
            'hinhanhtintuc'=>'required',
        ],[
            'tentintuc.required'=>'Dữ liệu không được bỏ trống',
            'tentintuc.unique'=>'Dữ liệu đã bị trùng',
            'motatintuc.required'=>'Dữ liệu không được bỏ trống',
            'noidungtintuc.required'=>'Dữ liệu không được bỏ trống',
            'hinhanhtintuc.required'=>'Dữ liệu không được bỏ trống',
        ]);
    	$data = $request->except('_token','hinhanhtintuc');
        if($request->hinhanhtintuc){
            $image = upload_image('hinhanhtintuc');
            if($image['code'] == 1){
                $data['hinhanhtintuc'] = $image['name'];
            }
        }
        $id = tintuc::insertGetId($data);
        return redirect()->back()->with('success', __('Create success.'));
    }
    public function edit_tintuc($id)
    {
    	$tintuc = tintuc::find($id);
    	return view('Backend/tintuc/edit',compact('tintuc'));
    }
    public function update($id,Request $request)
    {
        $request->validate([
            'tentintuc'=>'required',
            'motatintuc'=>'required',
            'noidungtintuc'=>'required',
        ],[
            'tentintuc.required'=>'Dữ liệu không được bỏ trống',
            'motatintuc.required'=>'Dữ liệu không được bỏ trống',
            'noidungtintuc.required'=>'Dữ liệu không được bỏ trống',
        ]);
        $gettintuc = tintuc::find($id);
        $data = $request->except('_token','hinhanhtintuc');
         if($request->hinhanhtintuc){
            $image = upload_image('hinhanhtintuc');
            if($image['code'] == 1){
                $data['hinhanhtintuc'] = $image['name'];
            }
        }
        $gettintuc->update($data);
        return redirect()->back()->with('success', __('Update success.'));
       
    }
    public function delete_tintuc($id_tintuc)
    {
    	$delete = tintuc::where('idtintuc',$id_tintuc)->delete();
        if($delete){
            return redirect('quanlytintuc')->with('success', __('Delete success'));
        }else{
            return redirect()->back()->withErrors('Delete error.');
        }
    }
}
