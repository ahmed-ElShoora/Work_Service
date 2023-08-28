<?php

namespace App\Http\Controllers;

use App\Http\Traits\UplodeTrait;
use App\Models\About;
use App\Models\Contact;
use App\Models\Deal;
use App\Models\Home;
use App\Models\HowUseTwo;
use App\Models\Info;
use App\Models\Privacy;
use App\Models\Setting;
use App\Models\HowUse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use UplodeTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function setting(){
        $data = Setting::first();
        return view('admin.setting',compact('data'));
    }

    public function settingForm(Request $request){
        if ($request->logo == null){
            $logo = $request->logo_old;
        }else{
            $logo = $this->uploud($request->logo);
        }
        $update = Setting::first();
        $update->update([
           'title_ar'=>$request->title_ar,
           'title_en'=>$request->title_en,
           'logo'=>$logo,
           'google_link'=>$request->google_link,
           'apple_link'=>$request->apple_link,
           'facebook_link'=>$request->facebook_link,
           'twiter_link'=>$request->twiter_link,
           'youtube_link'=>$request->youtube_link,
           'email'=>$request->email,
           'phone'=>$request->phone,
           'desc_ar'=>$request->desc_ar,
           'desc_en'=>$request->desc_en,
        ]);
        return redirect()->back();
    }

    public function home(){
        $data = Home::first();
        return view('admin.home',compact('data'));
    }

    public function homeForm(Request $request){
        if ($request->logo == null){
            $logo = $request->logo_old;
        }else{
            $logo = $this->uploud($request->logo);
        }
        $update = Home::first();
        $update->update([
           'title_ar'=>$request->title_ar,
           'title_en'=>$request->title_en,
           'desc_ar'=>$request->desc_ar,
           'desc_en'=>$request->desc_en,
           'logo'=>$logo,
           'button_ar'=>$request->button_ar,
           'button_en'=>$request->button_en,
           'button_color'=>$request->button_color,
        ]);
        return redirect()->back();
    }

    public function contactUs(){
        $datas = Contact::where('form',1)->orderBy('id','DESC')->get();
        return view('admin.contact',compact('datas'));
    }

    public function contactUsWork(){
        $datas = Contact::where('form',2)->orderBy('id','DESC')->get();
        return view('admin.contact',compact('datas'));
    }

    public function info(){
        $data = Info::first();
        return view('admin.info',compact('data'));
    }

    public function infoForm(Request $request){
        if ($request->logo == null){
            $logo = $request->logo_old;
        }else{
            $logo = $this->uploud($request->logo);
        }
        $update = Info::first();
        $update->update([
            'desc_ar'=>$request->desc_ar,
            'desc_en'=>$request->desc_en,
            'logo'=>$logo,
        ]);
        return redirect()->back();
    }

    public function howuse(){
        $data = HowUse::first();
        return view('admin.howuse',compact('data'));
    }

    public function howuseForm(Request $request){

        $update = HowUse::first();
        $update->update([
            'desc_ar'=>$request->desc_ar,
            'desc_en'=>$request->desc_en,
            'video'=>$request->video,
        ]);
        return redirect()->back();
    }

    public function vantages(){
        $deals = Deal::get();
        return view('admin.deals.index',compact('deals'));
    }

    public function createVantages(){
        return view('admin.deals.create');
    }

    public function createVantagesForm(Request $request){
        $logo = $this->uploud($request->image);
        Deal::create([
           'image'=>$logo,
           'name_ar'=>$request->name_ar,
           'name_en'=>$request->name_en,
           'desc_ar'=>$request->desc_ar,
           'desc_en'=>$request->desc_en,
        ]);
        return redirect()->back();
    }

    public function deleteVantages($id){
        $delete = Deal::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function editVantages($id){
        $data = Deal::where('id',$id)->first();
        return view('admin.deals.edit',compact('data','id'));
    }

    public function editVantagesForm(Request $request){
        if ($request->image == null){
            $logo = $request->old_image;
        }else{
            $logo = $this->uploud($request->image);
        }
        $update = Deal::find($request->id);
        $update->update([
            'image'=>$logo,
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'desc_ar'=>$request->desc_ar,
            'desc_en'=>$request->desc_en,
        ]);
        return redirect()->back();
    }

    public function AboutUs(){
        return view('admin.about');
    }

    public function PrivacyPolicy(){
        return view('admin.privacy');
    }

    public function AboutUsForm(Request $request){
        About::first()->update([
            'data_ar'=>$request->desc_ar,
            'data_en'=>$request->desc_en,
        ]);
        return redirect()->back();
    }

    public function PrivacyPolicyForm(Request $request){
        Privacy::first()->update([
            'data_ar'=>$request->desc_ar,
            'data_en'=>$request->desc_en,
        ]);
        return redirect()->back();
    }

    public function HowUseTwo(){
        $datas = HowUseTwo::get();
        return view('admin.howuse-two',compact('datas'));
    }

    public function HowUseTwoUpdate(Request $request){
        Setting::first()->update([
            'howuse_ar'=>$request->desc_ar,
            'howuse_en'=>$request->desc_en,
        ]);
        return redirect()->back();
    }

    public function createUse(){
        return view('admin.create-use');
    }

    public function createUseForm(Request $request){
        $logo = $this->uploud($request->logo);
        HowUseTwo::create([
            'logo'=>$logo,
            'link'=>$request->link,
            'title_ar'=>$request->title_ar,
            'title_en'=>$request->title_en,
            'desc_ar'=>$request->desc_ar,
            'desc_en'=>$request->desc_en
        ]);
        return redirect()->back();
    }

    public function deleteUseForm($id){
        HowUseTwo::find($id)->delete();
        return redirect()->back();
    }

    public function editHowUseTwo($id){
        $data = HowUseTwo::where('id',$id)->first();
        return view('admin.edit-use',compact('data','id'));
    }

    public function editHowUseTwoForm(Request $request,$id){
        if ($request->logo != null){
            $logo = $this->uploud($request->logo);
        }else{
            $logo = $request->old_logo;
        }
        HowUseTwo::find($id)->update([
            'logo'=>$logo,
            'link'=>$request->link,
            'title_ar'=>$request->title_ar,
            'title_en'=>$request->title_en,
            'desc_ar'=>$request->desc_ar,
            'desc_en'=>$request->desc_en
        ]);
        return response()->json($request->all());
    }
}
