<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Order;

use Illuminate\Support\Facades\Stroage;

use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
      if(Auth::id())
      {
        if(Auth::user()->usertype=='0')
        {
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }
        elseif(Auth::user()->usertype=='2'){

           return view('doctorhome.home');
        }
        else{
            return view('admin.home');
        }
      }
      else
      {
          return redirect()->back();
      }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else{
        $doctor = doctor::all();
        return view('user.home', compact('doctor'));
        }
    }


    public function appointment(Request $request)
    {
       
       
        $data = new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date  ;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;

        $data->doctor_id=$request->doctor_id;
        $data->status='In Progress';

        $data->payment_status='Not Paid';

       
        
        
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Appointment Request Succesful . We will contact soon');



    }
   
    public function myappointment(){
       if(Auth::id())
       {
         $userid=Auth::user()->id;

         $appoint=appointment::where('user_id',$userid)->get();
        return view('user.my_appointment',compact('appoint'));
       }
       else{
        return redirect()->back();
       }
    }

    public function cancel_appointment($id)
    {

           $data=appointment::find($id);

           $data->delete();

           return redirect()->back();

    }

    public function doctorlist(){

        $doctor = doctor::all();

        return view('user.doctorlist', compact('doctor'));
    }
     
    public function aboutus(){

        return view('user.about_us');
    }

    public function newsdetails(){

        return view('user.news_details');
    }
  
    public function contact(){

        return view('user.contact');
    }

    public function download(Request $request, $file){
      
        return response()->download(public_path('assets/'.$file));

    }

    public function view($id){
      
        $data=appointment::find($id);

        return view ('user.viewfile', compact('data'));
    }

    public function docprofile($id){
      
        $data=doctor::find($id);


        return view ('user.docprofile', compact('data'));
    }


}

