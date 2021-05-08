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
                <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div>
        <table id="myTable" class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th  >Email</th>
                <th  >Subject</th>
                <th  >Date</th>
                <th >Action</th>
              </tr>
            </thead>

            <tbody>
                @php $count=0; @endphp
                    @foreach($contact as $item)
                    @php $count+=1  @endphp
                    <?php
                    if($item->status == 0){
                      $color = "700";
                    }else{
                      $color = "400";
                    }
                   
                    ?>
                  <tr style="font-weight:{{$color}};">
                    <th scope="row">{{$count}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->subject}}</td>
                    <td>{{$item->created_at->format('j M Y h:i A')}}</td>
                  
                   
                   
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-info" href="{{url('/contactdetalis/'.Crypt::encrypt($item->id))}}">View<a>
                          <form action="{{url('/contactdelete/'.Crypt::encrypt($item->id))}}" method="post">
                            @csrf
                            <button type="submit"  data-name="" class="btn btn-danger delete-confirm delete-confirm"> 
                              <i class="fas fa-trash-alt btn-icon-prepend"></i>
                               Delete
                            </button>   
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
             
            
            </tbody>
          </table>
    </div>
  </main>
@endsection