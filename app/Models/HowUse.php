<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class HowUse extends Model
{
    use HasFactory;
    protected $table = 'howuse';
    protected $fillable = ['video','desc_ar','desc_en'];

    public function scopeGetHowUseFront($query){
        return $query->select(
            'desc_'.App::getLocale().' as desc',
            'video',
        )->first();
    }
}
