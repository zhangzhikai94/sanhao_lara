<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //首页
    public function home(){
    	return view("static_pages/home");
    }

    //渲染帮助也
    public function help(){
    	return view("static_pages/help");
    }

    //渲染关于页面
    public function about(){
    	return view("static_pages/about");
    }

}
