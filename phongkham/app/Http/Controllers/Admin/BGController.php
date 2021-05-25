<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banggia;
use App\Models\dichvu;
class BGController extends Controller
{
    public function __construct()
    {
        $this->middleware('checklogin');
    }
    public function list_banggia()
    {
    	$banggia = banggia::paginate(5);
        $index = 1;
    	return view('Backend/banggia/list',compact('banggia','index'));
    }
    public function add_banggia()
    {
    	$dichvu = dichvu::all();
    	return view('Backend/banggia/add',compact('dichvu'));
    }
    public function add_post_banggia(Request $request)
    {
         $request->validate([
            'iddichvu'=>'required',
            'donvi'=>'required',
            'dongia'=>'required',
        ],[
            'iddichvu.required'=>'Dữ liệu không được bỏ trống',
            'donvi.required'=>'Dữ liệu không được bỏ trống',
            'dongia.required'=>'Dữ liệu không được bỏ trống',
        ]);
    	$data = $request->all();
    	$dichvu = dichvu::where('iddichvu',$data['iddichvu'])->get();
        foreach ($dichvu as $key => $value) {
            $tendichvu = $value['tendichvu'];
        }
    	$banggia = new banggia();
        $banggia->tendichvu = $tendichvu;
        $banggia->iddichvu = $data['iddichvu'];
        $banggia->donvi = $data['donvi'];
        $banggia->dongia = $data['dongia'];
        $banggia->save();
    	if($banggia){
		 	return redirect()->back()->with('success', __('Create success.'));
		}else{
			return redirect()->back()->withErrors('Create error.');
		}
    }
    public function edit_banggia($id_banggia)
    {
        $get_banggia = banggia::findOrFail($id_banggia);
        $dichvu = dichvu::all();   
        return view('Backend/banggia/edit',compact('dichvu','get_banggia'));
    }
    public function edit_post_banggia(Request $request,$id_banggia)
    {
        $request->validate([
            'donvi'=>'required',
            'dongia'=>'required',
        ],[
            'donvi.required'=>'Dữ liệu không được bỏ trống',
            'dongia.required'=>'Dữ liệu không được bỏ trống',
        ]);
        $data1 = $request->all();
        $dichvu = dichvu::where('iddichvu',$data1['iddichvu'])->get();
        foreach ($dichvu as $key => $value) {
            $tendichvu = $value['tendichvu'];
        }
        $data = array(
            'iddichvu'=>$request->iddichvu,
            'tendichvu'=>$tendichvu,
            'dongia'=>$request->dongia,
            'donvi'=> $request->donvi,  
        );
        $update = banggia::where('idbanggia',$id_banggia)->update($data);
        if($update){
            return redirect()->back()->with('success', __('Update success'));
        }
    }
    public function delete_banggia($id_banggia)
    {

        $delete = banggia::where('idbanggia',$id_banggia)->delete();
        if($delete){
            return redirect('quanlybanggia')->with('success', __('Delete success'));
        }else{
            return redirect()->back()->withErrors('Delete error.');
        }
    }
}
