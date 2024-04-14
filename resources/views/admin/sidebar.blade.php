<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{ asset('admin/img/admin.png') }}" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">{{ auth()->user()->name }}</h1>
        <p>{{ auth()->user()->username }}</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="{{ route(('homedash')) }}"> <i class="icon-home"></i>Home </a></li>
            <li><a href={{ route('userdata') }}> <i class="bi bi-people"></i>users </a></li>
            <li><a href={{ route('userform') }}> <i class="fa fa-bar-chart"></i>requests </a></li>
            <li><a href="{{ route('userrejected') }}"> <i class="bi bi-person-x-fill"></i>rejects </a></li>
            <li><a href="{{ route('qbull') }}"> <i class="bi bi-person-check-fill"></i>accepts </a></li>
            <li><a href="{{ route('dawakaryakan') }}"> <i class="bi bi-telegram"></i>contacts </a></li>


    </ul>


  </nav>
