<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Home extends Model
{
    use HasFactory;
    protected $table = 'home';
    protected $fillable = [
        'logo','title_ar','title_en','desc_ar','desc_en','button_ar','button_en','button_color'
    ];

    public function scopeGetHomeFront($query){
        return $query->select(
            'title_'.App::getLocale().' as title',
            'desc_'.App::getLocale().' as desc',
            'button_'.App::getLocale().' as button',
            'logo',
            'button_color',
        )->first();
    }
}
