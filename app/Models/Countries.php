<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Countries extends Model
{
	use SoftDeletes;

    protected $table = 'countries';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
  
}
