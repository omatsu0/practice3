<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
function tag($tag,$txt){
    return "<$tag>".$txt."<$tag>";

}
$body='</head><body>';
$end='</body></html>';

class HelloController extends Controller
{
    public function index(Request $request){
        global $head,$style,$body,$end;

        $html=$head.tag('title','Hello/Index').$style.$body;
        $data = [
        'msg'=>'これはBladeを利用したサンプルです',
        ];
        return view('hello.index',$data);

    }
}
