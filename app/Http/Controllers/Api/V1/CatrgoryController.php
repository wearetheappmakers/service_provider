<?php
namespace App\Http\Controllers\Api\V1;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\CustomeHelper;
use Carbon\Carbon;
use App\Models\Review;
use App\Models\Currency;
use App\Models\Option;
use JWTAuth;
use DB;

class CatrgoryController extends Controller
{
    public function index()
    {
        $data = Category::newtree();

        return response()->json(['success' => 1, 'records' => $data], 200);
    }

    // public function getServiceByCategory($id){
    // 	$data['service'] = Service::where('category_id',$id)->get();
        
  
    //     $data['review'] = Review::with('customer')->where([['service_id',$id]])->get();
       
    //     $data['count'] = count($data['review']);
    // 	// return response()->json(['success' => 1, 'records' => $data], 200);
    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Show Service/product with review',
    //         'data' => $data,
    //     ]);
    // }

    public function getServiceByCategory($id)
    {
        $data = Service::where('category_id',$id)->get();
        
        foreach($data as $datass)
        {
             $datass['review'] = Review::with('customer')->where([['service_id',$datass->id]])->get();
             // dd($datass['review']);
             $datass['count'] = count($datass['review']);

        }
        return response()->json([
            'success' => true,
            'message' => 'Show Service/product with review',
            'data' => $data,
        ]);
    }
 
    
}
 