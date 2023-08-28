<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'second_name','first_name','email','comment'
    ];

    public function scopeGetContact($query){
        return $query->where('form',1)->count();
    }

    public function scopeGetContactTwo($query){
        return $query->where('form',2)->count();
    }
}
