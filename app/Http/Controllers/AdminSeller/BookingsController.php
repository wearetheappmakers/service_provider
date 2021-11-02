<?php

namespace App\Http\Controllers\AdminSeller;;

use App\Models\Bookings;
use App\Models\Service;
use App\Models\Provider;
use App\Models\BookingStatus;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageHelper;
use DataTables;
use Auth;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function __construct(bookings $model)
    {
        $this->view = 'bookings';
        $this->route = 'bookings';
        $this->viewName = 'bookings';
        $this->model =  $model;

    }
    
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $query = $this->model->latest();

            return Datatables::of($query)
            ->addColumn('action', function ($row) {
                $btn = view('admin.layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'admin.'.$this->route,'delete' => route('admin.'.$this->route.'.destroy',$row->id) ])->render();
                return $btn;
            })
            ->addColumn('checkbox', function ($row) {
                $chk = view('admin.layout.checkbox')->with(['id' => $row->id])->render();
                return $chk;
            })
            ->addColumn('singlecheckbox', function ($row) {
                $schk = view('admin.layout.singlecheckbox')->with(['id' => $row->id , 'status'=>$row->status])->render();
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

            ->addColumn('provider', function ($row){
                $provider = Provider::where('id',$row->provider_id)->value('name');
                return $provider;
            })

            ->addColumn('bookingstatus', function ($row){
                $bookingstatus = BookingStatus::where('id',$row->status_id)->value('name');
                return $bookingstatus;
            })

            ->rawColumns(['checkbox', 'singlecheckbox','action','service','customer','provider',
                'bookingstatus'])
            ->make(true);

        }

        $data['title'] = 'Add ' . $this->viewName;
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;

        return view('adminseller.'.$this->view . '.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['url'] = route('admin.' . $this->route . '.store');

        $data['module'] = $this->viewName;
        $data['service'] = Service::where('status',1)->get();
        $data['customer'] = User::where('status',1)->get();
        $data['provider'] = Provider::where('status',1)->get();
        $data['bookingstatus'] = BookingStatus::where('status',1)->get();

        $data["bookings"] = Bookings::get();


        return view('admin.general.add_form')->with($data);
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

        $bookings = $this->model->create($param);

        if ($bookings){
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
    $data['provider_select'] = Provider::where('status',1)->get();
    $data['bookingstatus_select'] = BookingStatus::where('status',1)->get();

    $data['url'] = route('admin.' . $this->route . '.update', [$this->view => $id]);
    $data['module'] = $this->viewName;
    $data['resourcePath'] = $this->view;
    
        return view('admin.general.edit_form', compact('data'));//->with($data);
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
