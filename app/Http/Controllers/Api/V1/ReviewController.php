<?php
namespace App\Http\Controllers\Api\V1;

use App\Models\Review;
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

class ReviewController extends Controller
{
    
    public function createreview(Request $request)
    {
        $createreview = new Review;
    
        $createreview->service_id = $request->service_id;
        $createreview->customer_id =JWTAuth::user()->id;
        $createreview->content = $request->content;
        $createreview->rating = $request->rating;

        $createreview->save();


        return response()->json(['success' => 1, 'data'=> $createreview],200);

    }  

    public function viewreview(Request $request)
    {
        //  $viewreview = Review::where('customer_id',JWTAuth::user()->id)->orderBy('id','Desc')->get();


        // return response()->json(['success' => 1, 'data'=> $viewreview],200);


        $review1 = [];

        // $bookings = Bookings::where('customer_id',JWTAuth::user()->id)->orderBy('id','Desc')->get();
        $reviews = Review::get();
       // dd($reviews);

        foreach($reviews as $review)
        {
            $review1[] =[

            'id'=>$review->id,
            'customer_id'=>$review->customer_id,
            'service_id' => $review->service_id,
            'service'=> $review->servicename,
            'content'=> $review->content,
            'rating'=> $review->rating,

        ];

        }

        return response()->json(['success' => 1, 'review'=>$review1]);

    }

    public function editreview(Request $request)
    {
        $editreview = Review::where('id',$request->id)->first();

        return response()->json(['success' => 1, 'data'=> $editreview],200);
    }

    public function updatereview(Request $request)
    {
        $param = $request->all();
        $param['service_id'] = $request->service_id;
        $param['customer_id'] =JWTAuth::user()->id;
        $param['content'] = $request->content;
        $param['rating'] = $request->rating;

        $updatereview = Review::where('id', $request->id)->first();

        $updatereview->update($param);
        $updatereview->save();

        return response()->json(['success' => 1, 'message' => 'Updated successfully','data'=>$updatereview],200);

    }

    public function deletereview(Request $request)
    {
        if($request->id)
        {
        DB::table('review')->where('id',$request->id)->delete();
        return response()->json(['success' => 1, 'message' => 'Data Deleted successfully'],200);
        }else{
          return response()->json(['success' => 1, 'message' => 'error'],200);

        }
    }

}