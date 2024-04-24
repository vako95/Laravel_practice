<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MartinController extends Controller
{
 public function index(){

    $data = Post::all();
    dd($data->title);
 }


}
