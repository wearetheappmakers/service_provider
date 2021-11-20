<?php

namespace App\Http\Controllers\ProviderSeller;

use App\Models\Review;
use App\Models\Service;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageHelper;
use DataTables;
use Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function __construct(Review $model)
    {
        $this->view = 'review';
        $this->route = 'review';
        $this->viewName = 'review';
        $this->model =  $model;

    }
    
    public function index(Request $request)
    {

        if ($request->ajax()) {

            // $query = $this->model->latest();

            $query = Review::where('id',Auth::user()->id)->orderBy('id','desc')->get();

            return Datatables::of($query)
            ->addColumn('action', function ($row) {
                $btn = view('provider.layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'provider.'.$this->route,'delete' => route('admin.'.$this->route.'.destroy',$row->id) ])->render();
                return $btn;
            })
            ->addColumn('checkbox', function ($row) {
                $chk = view('provider.layout.checkbox')->with(['id' => $row->id])->render();
                return $chk;
            })
            ->addColumn('singlecheckbox', function ($row) {
                $schk = view('provider.layout.singlecheckbox')->with(['id' => $row->id , 'status'=>$row->status])->render();
                return $schk;
            })

             ->addColumn('service', function ($row) {
                $service = Service::where('id',$row->service_id)->value('name');
                return $service;
            })

             ->addColumn('customer', function ($row){
                $customer = User::where('id',$row->customer_id)->value('name');
                return $customer;
             })

            ->rawColumns(['checkbox', 'singlecheckbox','action','service','customer'])
            ->make(true);

        }

        $data['title'] = 'Add ' . $this->viewName;
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;

        return view('provider.providerseller.'.$this->view . '.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['url'] = route('provider.' . $this->route . '.store');

        $data['module'] = $this->viewName;
        $data['service'] = Service::where('status',1)->get();
        $data['customer'] = User::where('status',1)->get();
        $data["review"] = Review::get();


        return view('provider.general.add_form')->with($data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->all();

        $param['status']=empty($request->status)? 0 : $request->status;
        $param['service_id'] = serialize($param['service_id']);

        $review = $this->model->create($param);

        if ($review){
         return response()->json(['status'=>'success']);
     }else{
         return response()->json(['status'=>'error']);
     }

 }

 public function edit($id)
 {
    $data['title'] = 'Edit '.$this->viewName;
    $data['edit'] = $this->model->findOrFail($id);
    $data['service_select'] = Service::where('status',1)->get();
    $data['customer_select'] = User::where('status',1)->get();

    $data['url'] = route('provider.' . $this->route . '.update', [$this->view => $id]);
    $data['module'] = $this->viewName;
    $data['resourcePath'] = $this->view;
    // dd($data);
        // return view('provider.general.edit_form', compact('data'));//->with($data);
        // return view('provider.general.edit_form')->with($data);//(working fine)
      return view('provider.general.edit_form',compact('data'));
        
      // return view('provider.providerseller.review.edit')->with($data);
    // return view('provider.providerseller.review.edit',compact('data'));

    }

    public function update(Request $request, $id)
    {
    
        $param = $request->all();

        $param['status']=empty($request->status)? 0 : $request->status;
        unset($param['_token'], $param['_method']);
        
        $service = $this->model->where('id', $id)->first();

        $service->update($param);

        if ($service){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
        
    }

     public function destroy($id)
    {
        $result = $this->model->where('id',$id)->delete();

        if ($result){
            return response()->json(['success'=> true]);
        }else{
            return response()->json(['success'=> false]);
        }
        
    }


}
