<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //加载首页
    public function Index()
    {
        return view("welcome");
    }

    //开始加载about
    public function about()
    {
        $ceshi = [];
        return view("About.about",
        [
            'name' => 'World~!',
            'last' => 'Hello,Laravel!',
            'love' => 'I like Laravel@!',
            'ceshi' => $ceshi,
        ]
                   );
    }
}
