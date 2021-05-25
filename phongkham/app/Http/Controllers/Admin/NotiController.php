<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\thongbao;
class NotiController extends Controller
{
    public function __construct()
    {
        $this->middleware('checklogin');
    }
    public function list_thongbao()
    {
    	$thongbao = thongbao::all();
    	return view('Backend/thongbao/list',compact('thongbao'));
    }
    public function add_thongbao()
    {
    	return view('Backend/thongbao/add');
    }
    public function post_thongbao(Request $request)
    {
    	$data = $request->except('_token','hinhanhthongbao');
        if($request->hinhanhthongbao){
            $image = upload_image('hinhanhthongbao');
            if($image['code'] == 1){
                $data['hinhanhthongbao'] = $image['name'];
            }
        }
        $id = thongbao::insertGetId($data);
        return redirect()->back()->with('success', __('Create success.'));
    }
    public function edit_thongbao($id_thongbao)
    {
    	$thongbao = thongbao::find($id_thongbao);
    	return view('Backend/thongbao/edit',compact('thongbao'));
    }
    public function edit_post_thongbao(Request $request,$id_thongbao)
    {
    	$getthongbao = thongbao::findOrFail($id_thongbao);
        $data = $request->except('_token','hinhanhthongbao');

         if($request->hinhanhthongbao){
            $image = upload_image('hinhanhthongbao');
            if($image['code'] == 1){
                $data['hinhanhthongbao'] = $image['name'];
            }
        }
        $getthongbao->update($data);
        return redirect()->back()->with('success', __('Update success.'));  
    }
    public function delete_thongbao($id_thongbao)
    {
    	$delete = thongbao::where('idthongbao',$id_thongbao)->delete();
        if($delete){
            return redirect('quanlythongbao')->with('success', __('Delete success'));
        }else{
            return redirect()->back()->withErrors('Delete error.');
        }
    }
}
