<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Deal;
use App\Models\HowUseTwo;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WebController extends Controller
{
    public function home(){
        $datas = Deal::select([
            'image',
            'name_'.App::getLocale().' as name',
            'desc_'.App::getLocale().' as desc'
        ])->get();
        View::create([
            'ip'=>'172.0.0.1'
        ]);
        return view('front.index',compact('datas'));
    }

    public function contact(){
        return view('front.contact');
    }

    public function privacy(){
        return view('front.privacy');
    }

    public function useapp(){
        $datas = HowUseTwo::select(
            'logo',
            'link',
            'title_'.App::getLocale().' as title',
            'desc_'.App::getLocale().' as desc',
        )->get();
        return view('front.useapp',compact('datas'));
    }

    public function work(){
        return view('front.work');
    }

    public function contactFormOne(Request $request){
        Contact::create([
            'form'=>1,
            'second_name'=>$request->s,
            'first_name'=>$request->f,
            'email'=>$request->email,
            'comment'=>$request->message
        ]);
        return redirect()->back();
    }

    public function contactFormTwo(Request $request){
        Contact::create([
            'form'=>2,
            'second_name'=>$request->s,
            'first_name'=>$request->f,
            'email'=>$request->email,
            'comment'=>$request->message
        ]);
        return redirect()->back();
    }
}
