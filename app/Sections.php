<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;

class Sections extends Model
{
    protected $fillable = [
        'id',
        'idn_section_name',
        'en_section_name'
    ];

    public function categories(){
        return $this->hasMany('App\Categories');
    }
}
