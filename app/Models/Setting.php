<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_ar','title_en','logo','google_link','apple_link','facebook_link','youtube_link','email','phone','twiter_link','desc_ar','desc_en','howuse_ar','howuse_en'
    ];

    public function scopeGetSetting($query){
        return $query->first();
    }


    public function scopeGetSettingFront($query){
        return $query->select(
            'title_'.App::getLocale().' as title',
            'desc_'.App::getLocale().' as desc',
            'logo',
            'google_link',
            'apple_link',
            'facebook_link',
            'youtube_link',
            'email',
            'phone',
            'twiter_link',
            'howuse_'.App::getLocale().' as howuse'
        )->first();
    }
}
