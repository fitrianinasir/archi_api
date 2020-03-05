<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sections;

class Categories extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',  
        'section_id',
        'idn_section_name',
        'en_section_name'
    ];

    public function sections(){
    	return $this->belongsTo('App\Sections');
    }
   
}
