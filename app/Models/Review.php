<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Review extends Model
{
    
    use SoftDeletes;
    protected $table = 'review';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

     public function servicename (){
        return $this->belongsTo('App\Models\Service','service_id','id');
    }
      public  function customer()
    {
        return $this->belongsTo('App\User', 'customer_id', 'id');
    }

}
