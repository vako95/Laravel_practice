<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = Admin::all();

        return view('mypage/mypage',compact('data'));
    }
}
