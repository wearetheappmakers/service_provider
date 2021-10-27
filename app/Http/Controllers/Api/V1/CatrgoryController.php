<?php
namespace App\Http\Controllers\Api\V1;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\CustomeHelper;
use Carbon\Carbon;
use App\Models\Currency;
use App\Models\Option;
use DB;

class CatrgoryController extends Controller
{
    public function index()
    {
        $data = Category::newtree();
        return response()->json(['success' => 1, 'records' => $data], 200);
    }
    
}
 