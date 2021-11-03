<?php

namespace App\Http\Controllers\AdminSeller;

use App\Models\Role;
use App\Models\Permissions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function __construct(Role $model)
    {
        $this->view = 'role';
        $this->route = 'role';
        $this->viewName = 'Role List';
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

            ->addColumn('permissions1', function ($row) {
                $array=[];
                $result = '';


                if ($row->permissions_id != '') {
                
                   $permissions =(unserialize($row->permissions_id));

                    foreach($permissions as $value){

                        array_push($array,Permissions::where('id',$value)->value('title'));   
                    }

                    $result = implode(' , ',$array); 
                }

                return $result;
            })

            ->setRowClass(function () {
             return 'row-move';
            })
            ->setRowId(function ($row) {
             return 'row-' . $row->id;
            })
            ->rawColumns(['checkbox','singlecheckbox','permissions1','action'])
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
        $data['title'] = 'Add ' . $this->viewName;
        $data['module'] = $this->viewName;
        $data['permissions_select'] = Permissions::where('status',1)->get();
        $data['resourcePath'] = $this->view;

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
        $param['permissions_id'] = serialize($param['permissions_id']);

        $commision = $this->model->create($param);

        if ($commision){
           return response()->json(['status'=>'success']);
       }else{
           return response()->json(['status'=>'error']);
       }

   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit '.$this->viewName;
        $data['edit'] = $this->model->findOrFail($id);
        // dd($data);
        if (!empty($data['edit'])) {
            $data['edit']->permissions_id = unserialize($data['edit']->permissions_id);
        }

        $data['url'] = route('admin.' . $this->route . '.update', [$this->view => $id]);
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['permissions_select'] = Permissions::where('status',1)->get();
        
		return view('admin.general.edit_form', compact('data'));//->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $param = $request->all();
        $param['status']=empty($request->status)? 0 : $request->status;
        $param['permissions_id'] = serialize($param['permissions_id']);
        

        // $param['permissions_select']=Permissions::where('status',1)->get();
        unset($param['_token'], $param['_method']);
        
        $commision = $this->model->where('id', $id)->first();
        
        $commision->update($param);

        if ($commision){
           return response()->json(['status'=>'success']);
       }else{
           return response()->json(['status'=>'error']);
       }

   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->model->where('id',$id)->delete();

        if ($result){
            return response()->json(['success'=> true]);
        }else{
            return response()->json(['success'=> false]);
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
}
