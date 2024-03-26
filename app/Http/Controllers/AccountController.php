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
        $data = [
            'equip'=>[
                ['name'=>'超贝','star'=>22,'stat'=>'30','blame'=>60],
                ['name'=>'超贝','star'=>22,'stat'=>'30','blame'=>60],
            ],
            'eggs'=>[
                ['level'=>220, 'job'=>'shadowers','power'=>'60','fw'=>'n4m', 'desc'=>'已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回'],
                ['level'=>220, 'job'=>'shadowers','power'=>'60','fw'=>'n4m', 'desc'=>'已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回'],
                ['level'=>220, 'job'=>'shadowers','power'=>'60','fw'=>'n4m', 'desc'=>'已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回'],
            ],
            'guaika'=>[
                '30bd','20bd','40bd','party recovery'
            ],
            'hexa'=>[
                'skill'=>12,'master'=>10,'str1'=>10,'str2'=>11,'str3'=>12,'str4'=>13,
            ],
            'nuannuan'=>'黑刀、肌肉猫等',
        ];
        return  view('ms/account-info', compact('data'));

    }
}
