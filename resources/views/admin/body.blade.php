@extends('admin.index')

@section('content')

        <div class="row">


<!-- user data -->
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-user-1"></i></div><strong>New Clients</strong>
                </div>
                <div class="number dashtext-1"> {{ \App\Models\User::count() }}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
              </div>
            </div>
          </div>


<!-- all forms -->

@php
// Retrieve the cached data
$completeUsersArray = Cache::get('completeUsersArray');

// Check if the cache exists and is not empty
if($completeUsersArray) {
    $totalUsers = count($completeUsersArray);
} else {
    $totalUsers = 0; // Set total users to 0 if cache is empty or not found
}
@endphp


<div class="col-md-3 col-sm-6">
    <div class="statistic-block block">
      <div class="progress-details d-flex align-items-end justify-content-between">
        <div class="title">
          <div class="icon"><i class="icon-user-1"></i></div><strong>all forms</strong>
        </div>
        <div class="number dashtext-1"> {{  $totalUsers}}</div>
      </div>
      <div class="progress progress-template">
        <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
      </div>
    </div>
  </div>


<!-- contacts data -->

          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-contract"></i></div><strong>contacts</strong>
                </div>
                <div class="number dashtext-2">{{ \App\Models\Contact::count() }}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
              </div>
            </div>
          </div>

<!-- accepted data -->


          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>accepted</strong>
                </div>
                <div class="number dashtext-3">{{ \App\Models\User::where('status', 'accepted')->count() }}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
              </div>
            </div>
          </div>

<!-- rejected data -->


          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>rejected</strong>
                </div>
                <div class="number dashtext-3">{{ \App\Models\User::where('status', 'rejected')->count() }}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
              </div>
            </div>
          </div>


<!-- pending data -->

          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>pending</strong>
                </div>
                <div class="number dashtext-3">{{ \App\Models\User::where('status', 'pending')->count() }}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
              </div>
            </div>
          </div>





                @endsection
