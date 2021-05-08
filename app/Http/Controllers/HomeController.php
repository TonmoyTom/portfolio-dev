<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Mail;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        
    }

  

    public function contactall()
    {
       $contact = Contact::orderBy('id', 'desc')->get();
       return view('auth.contact',compact('contact'));
        
    }

    public function detalis($id)
    {
        $ids =  Crypt::decrypt($id);
        $contact = Contact::findOrFail($ids);
        $contactseen = Contact::where('id',$ids )->update(['status'=> 1]);
       return view('auth.contactdetalis',compact('contact','contactseen'));
        
    }

    public function contactdelete($id)
    {

       $ids =  Crypt::decrypt($id);
       $contact = Contact::findOrFail($ids);
       if(!is_null($contact)){
           $contact->delete();
       }
       
       $notification=array(
           'messege'=>'Conatct Delete successfully!',
           'alert-type'=>'success'
            );
          return Redirect()->back()->with($notification);
       
      
        
    }



    
}
