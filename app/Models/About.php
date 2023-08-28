<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class About extends Model
{
    use HasFactory;
    protected $table = 'about_us';
    protected $fillable = [
        'data_ar','data_en'
    ];

    public function scopeGetData($query){
        return $query->first();
    }

    public function scopeGetDataFront($query){
        return $query->select('data_'.App::getLocale().' as data')->first();
    }
}
