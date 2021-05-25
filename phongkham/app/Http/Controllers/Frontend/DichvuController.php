<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dichvu;
class DichvuController extends Controller
{
    public function dichvu()
    {
    	$dichvu = dichvu::all();
    	return view('Frontend/dichvu1',compact('dichvu'));
    }
    public function chitietdichvu($id)
    {
    	$chitietdichvu = dichvu::find($id);
    	return view('Frontend/chitietdichvu',compact('chitietdichvu'));
    }
}
