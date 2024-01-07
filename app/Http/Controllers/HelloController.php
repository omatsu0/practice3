<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head,$style,$body,$end;
$head='<html><head>';
$style= <<<EOF
<style>
</style>
EOF;
$body='<head><body>';
$end='</body></html>';
function tag($tag,$txt){
    return "<{$tag}>".$txt."<{$tag}>";
}
class HelloController extends Controller
{
    public function index(){
        global $head,$style,$body,$end;

        $html=$head . tag('title','Hello/Index').$style.$body
        .'<a href="/hello/other"> go to Other page</a>'.$end;
        return $html;
    }
    public function other(){
        global $head,$style,$body,$end;

        $html=$head . tag('title','Hello/Index').$style.$body
        .'<a href="/hello/other"> go to Other page</a>'.$end;
        return $html;
    }
}
