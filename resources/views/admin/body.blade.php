@extends('admin.index')

@section('content')

<div class="row">



    <!-- all forms -->


    @php
    // Retrieve the cached data
    $completeUsersArray = Cache::get('completeUsersArray');

    // Count total users
    if($completeUsersArray) {
        $totalUsers = count($completeUsersArray);
    } else {
        $totalUsers = 0;
    }

    // Count pending forms
    if($completeUsersArray) {
        // If $completeUsersArray exists, convert it to an array and count pending forms only for users in the array
        $pendingFormsCount = \App\Models\User::whereIn('id', $completeUsersArray->pluck('id'))->where('status', 'pending')->count();
    } else {
        // If $completeUsersArray doesn't exist, set pendingFormsCount to 0
        $pendingFormsCount = 0;
    }
    @endphp

    <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                    <div class="icon"><i class="bi bi-file-earmark-bar-graph"></i></div><strong>all forms</strong>
                </div>
                <div class="number dashtext-1"> {{ $totalUsers }}</div>
            </div>
            <div class="progress progress-template">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-success"></div>
            </div>
        </div>
    </div>


<!-- pending data -->
<div class="col-md-3 col-sm-6">
    <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
                <div class="icon"><i class="bi bi-hourglass-top"></i></div><strong>pending forms</strong>
            </div>
            <div class="number dashtext-3">{{ $pendingFormsCount }}</div>
        </div>
        <div class="progress progress-template">
            <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-secondary"></div>
        </div>
    </div>
    </div>







   <!-- accepted data -->
   <div class="col-md-3 col-sm-6">
    <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
                <div class="icon"><i class="bi bi-hand-thumbs-up-fill"></i></div><strong>accepted</strong>
            </div>
            <div class="number dashtext-3">{{ \App\Models\User::where('status', 'accepted')->count() }}</div>
        </div>
        <div class="progress progress-template">
            <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-info"></div>
        </div>
    </div>
</div>







<!-- rejected data -->
<div class="col-md-3 col-sm-6">
<div class="statistic-block block">
    <div class="progress-details d-flex align-items-end justify-content-between">
        <div class="title">
            <div class="icon"><i class="bi bi-hand-thumbs-down-fill"></i></div><strong>rejected</strong>
        </div>
        <div class="number dashtext-3">{{ \App\Models\User::where('status', 'rejected')->count() }}</div>
    </div>
    <div class="progress progress-template">
        <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-primary"></div>
    </div>
</div>
</div>




    <!-- contacts data -->
    <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                    <div class="icon"><i class="bi bi-telegram"></i></div><strong>contacts</strong>
                </div>
                <div class="number dashtext-2">{{ \App\Models\Contact::count() }}</div>
            </div>
            <div class="progress progress-template">
                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-warning"></div>
            </div>
        </div>
    </div>


    <!-- user data -->
    <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                    <div class="icon"><i class="bi bi-people"></i></div><strong>all users</strong>
                </div>
                <div class="number dashtext-1"> {{ \App\Models\User::count() }}</div>
            </div>
            <div class="progress progress-template">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-danger"></div>
            </div>
        </div>
    </div>


<!-- admin data -->
<div class="col-md-3 col-sm-6">
    <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
                <div class="icon"><i class="bi bi-person-badge-fill"></i></div><strong>admins</strong>
            </div>
            <div class="number dashtext-3">{{ \App\Models\User::where('role', 'admin')->count() }}</div>
        </div>
        <div class="progress progress-template">
            <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-dark"></div>
        </div>
    </div>
</div>

<!-- user data -->
<div class="col-md-3 col-sm-6">
    <div class="statistic-block block">
        <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
                <div class="icon"><i class="bi bi-person"></i></div><strong>users</strong>
            </div>
            <div class="number dashtext-3">{{ \App\Models\User::where('role', 'user')->count() }}</div>
        </div>
        <div class="progress progress-template">
            <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light"></div>
        </div>
    </div>
</div>








</div>









@endsection
