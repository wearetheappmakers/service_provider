<?php
namespace App\Http\Controllers\Api\V1;

use App\Models\Bookings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\CustomeHelper;
use Carbon\Carbon;
use App\User;
use JWTAuth;
use App\Models\Currency;
use App\Models\Option;
use DB;

class BookingsController extends Controller
{
    
    public function createbookings(Request $request)
    {
        $createbookings = new Bookings;
    
        $createbookings->customer_id =JWTAuth::user()->id;
        $createbookings->provider_id = $request->provider_id;
        $createbookings->service_id = $request->service_id;
        $createbookings->status_id = $request->status_id;
        $createbookings->booking_at = $request->booking_at;
        $createbookings->notes = $request->notes;
        $createbookings->address1 = $request->address1;
        $createbookings->address2 = $request->address2;
        $createbookings->total = $request->total;
        $createbookings->save();


        return response()->json(['success' => 1, 'data'=> $createbookings],200);

    }  

     public function viewbookings(Request $request)
    {
         $viewbookings = Bookings::where('customer_id',JWTAuth::user()->id)->orderBy('id','Desc')->get();
         
        return response()->json(['success' => 1, 'data'=> $viewbookings],200);

    }

    public function editbookings(Request $request)
    {
        $editbookings = Bookings::where('id',$request->id)->first();

        return response()->json(['success' => 1, 'data'=> $editbookings],200);
    }

    public function updatebookings(Request $request)
    {
        $param = $request->all();
        $param['customer_id'] =JWTAuth::user()->id;
        $param['provider_id'] = $request->provider_id;
        $param['service_id'] = $request->service_id;
        $param['status_id'] = $request->status_id;
        $param['booking_at'] = $request->booking_at;
        $param['notes'] = $request->notes;
        $param['address1'] = $request->address1;
        $param['address2'] = $request->address2;
        $param['total'] = $request->total;

        $updatebookings = Bookings::where('id', $request->id)->first();

        $updatebookings->update($param);
        $updatebookings->save();

        return response()->json(['success' => 1, 'message' => 'Updated successfully','data'=>$updatebookings],200);

    }

    public function deletebookings(Request $request)
    {
        if($request->id)
        {
        DB::table('bookings')->where('id',$request->id)->delete();
        return response()->json(['success' => 1, 'message' => 'Data Deleted successfully'],200);
        }else{
          return response()->json(['success' => 1, 'message' => 'error'],200);

        }
    }

}