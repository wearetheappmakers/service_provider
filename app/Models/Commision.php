<?php
namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Commision extends Model
{
    use Sluggable;
    use SoftDeletes;
    protected $table = 'commision';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

   
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
