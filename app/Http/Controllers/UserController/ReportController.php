<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function send(Request $request){
       if($request->options != -1){
            if($request->options==0){
                $request->mergeIfMissing(['type'=>1,'idUsers'=>Auth::user()->idUsers]);
                Report::create($request->all());
            }
            else{
                $request->mergeIfMissing(['type'=>0,'idUsers'=>Auth::user()->idUsers]);
                Report::create($request->all());
            }
            
            return back()->with('message','Đã gửi báo cáo đến người quản trị');
       }
       else{
        return redirect()->back()->withErrors(['Vui lòng nội dung báo cáo']);
       }
    }
}
