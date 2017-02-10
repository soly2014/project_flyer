<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{

		protected $table = 'flyers';

		protected $fillable = [

		   	'street',
				'city',
				'zip' ,
				'country',
				'state',
				'price' ,
				'description'

		   ];


   /* --------------------------------------------------- */

   public static function locatedAt($zip,$street)
   {
   	  return Flyer::where(compact('zip','street'))->firstOrFail();
   }

   /* -------------------------------------------------- */

   public function photo()
   {
   	 return $this->hasMany('\App\Photos','flyer_id','id');
   }

   /* ------------------------------------------------------- */

   public static function fromForm()
   {
      
   }

   /* -------------------------------------------------------- */


}
