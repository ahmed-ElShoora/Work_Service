<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowUseTwo extends Model
{
    use HasFactory;
    protected $table = 'how_use_two';
    protected $fillable = [
        'logo','title_ar','title_en','desc_ar','desc_en','link'
    ];
}
