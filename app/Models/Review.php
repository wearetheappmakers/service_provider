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

   

}
