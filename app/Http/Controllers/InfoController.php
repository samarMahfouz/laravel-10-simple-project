<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    public function edit(Info $info){
        return view('profile.info', compact('info'));
    }
    
    public function update(Info $info, Request $request){
        $request->validate([
            'info'      => 'required',
            'email'      => 'required|string',
            'facebook'      => 'required|string',
            'instagram'      => 'required|string',
            'linkedin'      => 'required|string',
        ]);
        
        $infof = $request->input('info');
        $email = $request->input('email');
        $facebook = $request->input('facebook');
        $instagram = $request->input('instagram');
        $linkedin = $request->input('linkedin');
         
        $info->info = $infof;
        $info->email = $email;
        $info->facebook = $facebook;
        $info->instagram = $instagram;
        $info->linkedin = $linkedin;
        $info->save();
         
        return redirect()->back()->with('status', 'Info updated successfully');
    }
}