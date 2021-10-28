<?php
namespace App\Http\Controllers\Api\V1;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\CustomeHelper;
use Carbon\Carbon;
use App\Models\Currency;
use App\Models\Option;
use DB;

class ServiceController extends Controller
{
    public function getService()
    {
        $data = Service::where('id',1)->get();
        return response()->json(['success' => 1, 'records' => $data], 200);
    }   
}