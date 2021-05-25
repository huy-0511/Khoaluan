<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tintuc;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
class TintucController extends Controller
{
    public function tintuc()
    {
    	$tintuc = tintuc::orderBy('idtintuc','DESC')->simplePaginate(4);
    	return view('Frontend/tintuc1',compact('tintuc'));
    }
    public function chitiettintuc($id)
    {
    	$chitiettintuc = tintuc::find($id);

    	return view('Frontend/chitiettintuc',compact('chitiettintuc'));
    }
}
