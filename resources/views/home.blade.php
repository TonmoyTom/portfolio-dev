@extends('layouts.admin-home')

@section('content')

<?php
$count = DB::table('contacts')->count();
$unseen = DB::table('contacts')->where('status', 0)->count();
$seen = DB::table('contacts')->where('status', 1)->count();
?>


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 my-3">
          <div class="bg-mattBlackLight px-3 py-3">
            <h4 class="mb-2">Total Message</h4>
            <div class="progress" style="height: 16px;">
              <div
                class="progress-bar bg-warning text-mattBlackDark"
                role="progressbar"
                style="width: 25%;"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
              >
              {{$count}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-3">
          <div class="bg-mattBlackLight px-3 py-3">
            <h4 class="mb-2">Unseen Message</h4>
            <div class="progress" style="height: 16px;">
              <div
                class="progress-bar bg-info text-mattBlackDark"
                role="progressbar"
                style="width: 50%;"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
              >
              {{$unseen}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-3">
          <div class="bg-mattBlackLight p-3">
            <h4 class="mb-2">Seen Message</h4>
            <div class="progress" style="height: 16px;">
              <div
                class="progress-bar bg-success"
                role="progressbar"
                style="width: 80%;"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
              >
              {{$seen}}
              </div>
            </div>
          </div>
        </div>
      </div>
    
@endsection




