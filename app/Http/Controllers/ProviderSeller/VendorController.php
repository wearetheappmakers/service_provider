<?php
namespace App\Http\Controllers\ProviderSeller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Provider;
use App\Models\Membership;
use DataTables;
use DB;
use Auth;
use Hash;
use Carbon\Carbon;

class VendorController extends Controller
{
    public function __construct(User $s)
    {
        $this->view = 'vendors';
        $this->route = 'vendors';
        $this->viewName = 'Customer';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$type)
    {
    	$data['type'] = $type;
        if ($request->ajax()) {
    //         if ($type == 'all') {
    //             $query = User::latest()->get();
    //         }else{
			 // $query = User::where([['status', $type]])->latest()->get();
    //         }
            $query = Provider::where('id',Auth::user()->id)->orderBy('id','desc')->get();
             

			return Datatables::of($query)
				->addColumn('action', function ($row) {
					$btn = view('provider.layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'provider.'.$this->route,'delete' => route('provider.'.$this->route.'.destroy',$row->id) ])->render();
					return $btn;
				})
				->addColumn('singlecheckbox', function ($row) {
					$schk = view('provider.layout.activecheckbox')->with(['id' => $row->id , 'status'=>$row->status])->render();
					return $schk;
                })
				->rawColumns(['singlecheckbox','action'])
				->make(true);
		}
		$data['title'] = 'Add ' . $this->viewName;
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        return view('provider.providerseller.vendors.index')->with($data);
    }

      public function create()
    {
        $data['url'] = route('provider.' . $this->route . '.store');
        $data['title'] = 'Add ' . $this->viewName;
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['index'] = route('provider.' . $this->route . '.index','all');

        return view('provider.providerseller.vendors.create')->with($data);
    }

    public function store(Request $request)
    {
        $param = $request->all();
        $param['password'] = isset($param['spassword']) ? bcrypt($param['spassword']) : bcrypt(12345678);

        $customer = User::create($param);

        if ($customer){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
      
    }

    public function edit(Request $request,$id)
    {
        $data['title'] = 'Edit '.$this->viewName;
        $data['edit'] = User::findOrFail($id);
        $data['url'] = route('provider.' . $this->route . '.update', [$this->view => $id]);
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['index'] = route('provider.' . $this->route . '.index','all');

        return view('provider.providerseller.vendors.edit')->with($data);
    }

    public function update(Request $request)
    {
        $param = $request->all();
        $password = User::findOrFail($request->id);
        unset($param['_token']);
        unset($param['id']);
        $param['password'] = isset($param['spassword']) ? bcrypt($param['spassword']) : bcrypt(12345678);

        $customer = User::where('id',$request->id)->update($param);

        if ($customer){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }

    public function change_status(Request $request)
    {

        $table_name = $request->get('table_name');
        $param = $request->get('param');
        $id_array = explode(',', $request->get('id'));
        
        try {
            if ($param == 0) {
                foreach ($id_array as $id) {
                    DB::table($table_name)->where('id', $id)
                        ->update([
                            'status' => 1,
                        ]);
                }
            } elseif ($param == 1) {
                foreach ($id_array as $id) {
                    DB::table($table_name)->where('id', $id)
                        ->update([
                            'status' => 0,
                        ]);
                }
            }

            $res['status'] = 'Success';
            $res['message'] = 'Status Change successfully';
        } catch (\Exception $ex) {
            $res['status'] = 'Error';
            $res['message'] = 'Something went wrong.';
        }

        return response()->json($res);
    
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        $result = User::where('id',$id)->delete();

        if ($result){
            return response()->json(['success'=> true]);
        }else{
            return response()->json(['success'=> false]);
        }
    }
    


}
