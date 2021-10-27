<?php
namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Service extends Model
{
    use Sluggable;
    use SoftDeletes;
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
     protected $appends = ['image_full_path'];
   
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getImageFullPathAttribute()
    {
        if(empty($this->icon)){
            return '';
        }
        return env('APP_URL').'/storage/uploads/service/Big/'.$this->icon;
    }

}
