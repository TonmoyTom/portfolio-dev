<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{

    public function show()
    {
        return view('welcome');
        
    }

  
    
    public function contact(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|',
            'email' => 'required|',
            'subject' =>  'required|',
            'message' =>  'required|',
            
        ]); 
        


        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save(); 
        // dd($contact);    
 

        Mail::send('contactMail', array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' =>  $request->message,
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('Kamrulzamantonmoy@gmail.com')->subject($request->get('subject'));
        });

       

    

        

       return redirect()->route('welcome')->with(['success' => 'Contact Form Submit Successfully']);
    




    }

}
