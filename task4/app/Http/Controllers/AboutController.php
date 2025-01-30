<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class AboutController extends Controller
{
    //
    public function index(){
        $site_data=Setting::first();
        return view('front.about',compact('site_data'));
    }
}
