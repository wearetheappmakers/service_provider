<?php
namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Bookings extends Model
{
    use SoftDeletes;
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
  

   public function servicename (){
        return $this->belongsTo('App\Models\Service','service_id','id');
    }
   public function providerename (){
        return $this->belongsTo('App\Models\Provider','provider_id','id');
    }
    public function statusname (){
        return $this->belongsTo('App\Models\BookingStatus','status_id','id');
    }



}
