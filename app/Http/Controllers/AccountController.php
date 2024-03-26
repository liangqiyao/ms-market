<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //

    function index(Request $request){
        $current_page = $request->input('page', 1);
        $keywords = $request->input('keywords', '');
        $type = $request->input('type', 1);
        $data = [];
        for($i=1;$i<=15;$i++){
            $data[] = ['id'=>$i,'price'=>rand(1000,30000), 'desc'=>'全身22X 漆黑7set 怪卡95bd 40无视 3大回 大掉','title'=>'R1 280 adele'];
        }
       
        $page_info = ['total_page'=>100, 'curr_page'=>$current_page, 'keywords'=>$keywords, 'type'=>$type];

        return view('ms/account-list', compact('data', 'page_info'));
    }
    function info(){
        $data = [];
        return  view('ms/account-info', compact('data'));

    }
}
