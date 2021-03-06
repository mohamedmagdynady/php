<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\empleado;
use App\attrecord;
use Auth;
use Session;
use Input;
class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function showprofile(){
        //if(Auth::user()->type==3){
          //  return redirect('/');
        //}
        return view('personalprofile');
    }

    public function update(empleado $employee)
    {
        $records=DB::table('attrecords')->get();
        $x=$employee->id;
        return view('update',compact('x','records'));
    }
    public function profile()
    {
        
            $empleado=DB::table('empleados')->get();
          
            return view('profile',compact('empleado'));
            
            //return view('about');
            
    }
    public function delete(empleado $employee){
        
        $employee->delete();
        Session::flash('success', 'employee has been deleted!');
        $notification = array(
            'message' => 'Employee deleted succeffully!',
            'alert-type' => 'info' //success,info,error,warning
        );

        return back()->with($notification);
        //return view('about');
        }
        public function store(Request $request){
           /* if($request->name==''){
                //echo "<script type='text/javascript'>alert('title entered cannot be empty!')</script>";
                return back();
            }else{*/
            $page=new empleado;
            //$x='6';
           // $page->id=$x;
            
            $page->name=$request->name;
            $page->email=$request->email;
            $page->mobile=$request->mobile;
            $page->save();
            Session::flash('success', 'employee has been created!');
            $notification = array(
                'message' => 'Employee created succeffully!',
                'alert-type' => 'success'
            );

            return back()->with($notification);
            //return view('about');
            
        }
        public function addrecord(Request $request, $x){
            /* if($request->name==''){
                 //echo "<script type='text/javascript'>alert('title entered cannot be empty!')</script>";
                 return back();
             }else{*/
                $this->validate($request,['status'=>'required|min:3'],['status.required'=>'addsomething in status field']);
             $page=new attrecord;
             $page->employee=$x;
             $page->date=$request->date;
             $page->workinghour=$request->workinghour;
             $page->status=$request->status;
             $page->save();
             return back();
             //return view('about');
             
         }
      

        
}
