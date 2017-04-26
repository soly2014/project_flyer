<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    
	   protected $table = 'photos';
	 
	   protected $fillable = [

   		'path','name'

       ];



     /* -------------------------- */

     public function flyer()
   {
   	 return $this->belongsTo('\App\Flyer');
   }


}
