<?php
namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Address extends Model
{
   
    protected $table = 'address';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];


}
