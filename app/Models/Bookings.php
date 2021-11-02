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


}
