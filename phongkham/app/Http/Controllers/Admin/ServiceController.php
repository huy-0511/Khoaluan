<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dichvu;
class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('checklogin');
    }
    public function list_dichvu()
    {

    	$dichvu = dichvu::paginate(5);
    	return view('Backend/dichvu/list',compact('dichvu'));
    }
    public function add_dichvu()
    {
    	return view('Backend/dichvu/add');
    }
    public function post_dichvu(Request $request)
    {
        $request->validate([
            'tendichvu'=>'required|unique:tbl_dichvu,tendichvu|min:3',
            'motadichvu'=>'required',
            'noidungdichvu'=>'required',
            'hinhanhdichvu'=>'required',
        ],[
            'tendichvu.required'=>'Dữ liệu không được bỏ trống',
            'tendichvu.min'=>'Dữ liệu phải nhiều hơn 3 kí tự',
            'tendichvu.unique'=>'Dữ liệu đã bị trùng',
            'motadichvu.required'=>'Dữ liệu không được bỏ trống',
            'noidungtintuc.required'=>'Dữ liệu không được bỏ trống',
            'hinhanhdichvu.required'=>'Dữ liệu không được bỏ trống',
        ]);
    	$data = $request->except('_token','hinhanhdichvu');
        if($request->hinhanhdichvu){
            $image = upload_image('hinhanhdichvu');
            if($image['code'] == 1){
                $data['hinhanhdichvu'] = $image['name'];
            }
        }
        $id = dichvu::insertGetId($data);
        return redirect()->back()->with('success', __('Create success.'));
    }
    public function delete_dichvu($id_dichvu)
    {
    	$delete = dichvu::where('iddichvu',$id_dichvu)->delete();
        if($delete){
            return redirect('quanlydichvu')->with('success', __('Delete success'));
        }else{
            return redirect()->back()->withErrors('Delete error.');
        }
    }
    public function edit_dichvu($id_dichvu)
    {
    	$dichvu = dichvu::find($id_dichvu);
    	return view('Backend/dichvu/edit',compact('dichvu'));
    }
    public function edit_post_dichvu(Request $request,$id_dichvu)
    {
        $request->validate([
            'tendichvu'=>'required|min:3',
            'motadichvu'=>'required',
            'noidungdichvu'=>'required',
        ],[
            'tendichvu.required'=>'Dữ liệu không được bỏ trống',
            'tendichvu.min'=>'Dữ liệu phải nhiều hơn 3 kí tự',
            'motadichvu.required'=>'Dữ liệu không được bỏ trống',
            'noidungtintuc.required'=>'Dữ liệu không được bỏ trống',
        ]);
    	$getdichvu = dichvu::findOrFail($id_dichvu);
        $data = $request->except('_token','hinhanhdichvu');
         if($request->hinhanhdichvu){
            $image = upload_image('hinhanhdichvu');
            if($image['code'] == 1){
                $data['hinhanhdichvu'] = $image['name'];
            }
        }
        $getdichvu->update($data);
        return redirect()->back()->with('success', __('Update success.'));  
    }
}
