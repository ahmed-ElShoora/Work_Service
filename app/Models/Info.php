<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Info extends Model
{
    use HasFactory;
    protected $table = 'infos';
    protected $fillable = ['desc_ar','desc_en','logo'];

    public function scopeGetInfoFront($query){
        return $query->select(
            'desc_'.App::getLocale().' as desc',
            'logo',
        )->first();
    }
}
