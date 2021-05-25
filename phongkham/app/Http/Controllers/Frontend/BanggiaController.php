<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banggia;
class BanggiaController extends Controller
{
    public function banggia()
    {
    	$banggia = banggia::all();
    	return view('Frontend/banggia1',compact('banggia'));
    }
}
