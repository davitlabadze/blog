<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {   
        $setting=Setting::first();
        return view('backend.setting.index')->with('setting',$setting);
    }
    //store
    public function save_settings(Request $request)
    {   
        $countData=Setting::count();
        if($countData==0)
        {
            $data = new Setting();
            $data->recent_limit=$request->recent_limit;
            $data->save();
        }else{
            $firstData=Setting::first();
            $data = Setting::find($firstData->id);
            $data->recent_limit=$request->recent_limit;
            $data->save();
            
        }

        return redirect('admin/setting')->with('success','Data has been updated');
    }
}
