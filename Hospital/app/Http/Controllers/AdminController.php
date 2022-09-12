<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Order;

use App\Models\User;

use App\Models\Appointment;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Stroage;

use Notification;

use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function addview()

    {
        if(Auth::id())

        {
            if(Auth::user()->usertype==1)
            {
                return view('admin.add_doctor');
            }
            else{
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;

        $image = $request->file;

        $imagename = time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image = $imagename;

        $doctor->name = $request->name;

        $doctor->phone = $request->number;

        $doctor->room = $request->room;

        $doctor->speciality = $request->speciality;

        $doctor->save();

        return redirect()->back()->with('message','Doctor Added Successfully');
    }

    public function showappointment()
    {
        $data=appointment::all();

        $data2=order::all();

        return view('admin.showappointment', compact('data','data2'));
       
    }


    public function approved($id)
    {
        $data=appointment::find($id);

        $data->status='Approved';

        $data->save();
        
        return redirect()->back();

    }


    public function canceled($id)
    {
        $data=appointment::find($id);

        $data->status='Canceled';

        $data->save();
        
        return redirect()->back();

    }

    public function paid($id)
    {
        $data=appointment::find($id);

        $data->payment_status='Paid';

        $data->save();
        
        return redirect()->back();

    }


    public function showdoctor()
    {
        $data=doctor::all();

        $data2=user::where('usertype','=',2)->get();

        return view('admin.showdoctor',compact('data','data2'));
    }


    public function deletedoctor($id)
    {
        $data=doctor::find($id);

        $data->delete();

        return redirect()->back();

    }


    public function updatedoctor($id)
    {
        $data=doctor::find($id);

        return view('admin.update_doctor',compact('data'));
    }


    public function editdoctor(Request $request, $id)
    {
        $doctor=doctor::find($id);

        $doctor->name=$request->name;

        $doctor->phone=$request->phone;

        $doctor->speciality=$request->speciality;

        $doctor->room=$request->room;

        $image=$request->file;

        if($image){

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->file->move('doctorimage',$imagename);

            $doctor->image=$imagename;

        }

        $doctor->save();

        return redirect()->back()->with('message','Doctor details update successfully!!');
    }
    

    public function emailview($id)
    {
        $data=appointment::find($id);
        return view('admin.email_view',compact('data'));
    }

    public function sendemail(Request $request,$id)

    {
        $data = appointment::find($id);
        $details=[
           'greeting' => $request->greeting,
           'body' => $request->body,
           'actiontext' => $request->actiontext,
           'actionurl' => $request->actionurl,
           'ending' => $request->ending


        ];

        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back()->with('message','Sent Successfully');
    }

    public function forward($id)
    {
        $data=appointment::find($id);

        return view('admin.forward',compact('data'));
    }

    public function editappoint(Request $request , $id)
    {
        $data=appointment::find($id);

        $data->doctor_id=$request->doctor_id;

        $data->save();

        return redirect()->back()->with('message','Details Forwarded successfully!!');
    }
   
    public function showappoint()
    {    
        
       
        if(Auth::id())
       {
         $userid=Auth::user()->id;

         $appoint=appointment::where('doctor_id',$userid)->get();
         return view('doctorhome.showappoint',compact('appoint'));
       }
       else{
        return redirect()->back();
       }
        
    }

    public function upprescription($id)
    {
        $data=appointment::find($id);
        return view('doctorhome.upprescription', compact('data'));
    }

    public function uploadprescription(Request $request, $id)
    {
        $data=appointment::find($id);

        $file=$request->file;

        if($file){

            $file=time().'.'.$file->getClientOriginalExtension();

            $request->file->move('assets',$file);

            $data->file=$file;

        }

        $data->save();
        return redirect()->back();

    }

    public function payment()
    {
        $data=order::all();
        return view('admin.payment', compact('data'));
    }

  
}
