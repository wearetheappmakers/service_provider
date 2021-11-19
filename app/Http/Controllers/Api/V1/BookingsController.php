<?php
namespace App\Http\Controllers\Api\V1;

use App\Models\Bookings;
use App\Models\Address;
use App\Models\BookingStatus;
use App\Models\Service;
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
        $createbookings->booking_time = $request->booking_time;
        $createbookings->notes = $request->notes;
        $createbookings->address1 = $request->address1;
        $createbookings->address2 = $request->address2;
        $createbookings->total = $request->total;
        $createbookings->save();


        return response()->json(['success' => 1, 'data'=> $createbookings],200);

    }  
    public function address(Request $request)
    {
        $address = new Address();

        $address->user_id = $request->user_id;
        $address->latitude = $request->latitude;
        $address->longitude = $request->longitude;
        $address->address = $request->address;
        $address->save();

        $address= Address::where('user_id',$request->user_id)->get();

        return response()->json(['success'=> 1, 'data'=>$address],200);
    }

     public function viewbookings(Request $request)
    {
     //          $viewbookings = Bookings::where('customer_id',JWTAuth::user()->id)->orderBy('id','Desc')->get();


        $bookings1 = [];

        // $bookings = Bookings::where('customer_id',JWTAuth::user()->id)->orderBy('id','Desc')->get();
        $bookings = Bookings::get();

        foreach($bookings as $booking)
        {
            $bookings1[] =[
            'customer_id'=>$booking->customer_id,
            'provider_id' => $booking->provider_id,
            'provider' => $booking->providerename,
            'service_id' => $booking->service_id,
            'service'=> $booking->servicename,
            'status_id'=> $booking->status_id,
            'status'=> $booking->statusname,
            'booking_at'=> $booking->booking_at,
            'booking_time'=> $booking->booking_time,
            'notes' => $booking->notes,
            'address1' => $booking->address1,
            'address2' => $booking->address2,
            'total'=> $booking->total,

        ];

        }

        return response()->json(['success' => 1, 'booking'=>$bookings1]);
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
        $param['booking_time'] = $request->booking_time;
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