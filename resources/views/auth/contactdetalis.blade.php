@extends('layouts.admin-home')
@section('content')
<main>
    <div class="container " style="margin-top: 40px;" >
        <div class="page-header">
            <h3 class="page-title">
              Banner
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Contact</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalis</li>
              </ol>
            </nav>
          </div>
      
           
          <div class="form-group">
         <label for="Name"></label>
            <input type="text"  placeholder="Name" class="form-control" name="name" style="color: #000;" 
            value="{{$contact->name}}">

           
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" placeholder="Email" class="form-control" name="email" style="color: #000;" 
            value="{{$contact->email}}">
          

          
          </div>
          <div class="form-group">
            <label for="">Subject</label>
            <input type="text" placeholder="Subject" class="form-control" name="subject" style="color: #000;" value="{{$contact->subject}}">
          

          
          </div>
          <div class="form-group">
              <label for="">Message</label>
            <textarea  name="message" placeholder="Message"  class="form-control" >{{$contact->message}}</textarea><br> 
          </div>

          <div class="btn-group">
            <a class="btn-success" href="{{route('contact.all')}}" style="padding:10px; border-radius:5px; text-decoration: none;" >Back</a>
          </div>

      
  
    </div>
  </main>
@endsection