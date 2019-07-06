<?php

namespace App\Http\Controllers\Live;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    /**
     * 登录进来展示首页
     */
    public function index()
    {
        return view('live.index.index');
    }
}
