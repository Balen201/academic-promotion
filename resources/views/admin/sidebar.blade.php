<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{ asset('admin/img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Mark Stephen</h1>
        <p>Web Designer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="{{ route(('homedash')) }}"> <i class="icon-home"></i>Home </a></li>
            <li><a href={{ route('userdata') }}> <i class="icon-grid"></i>users </a></li>
            <li><a href={{ route('userform') }}> <i class="fa fa-bar-chart"></i>dawakaryakan </a></li>
            <li><a href="{{ route('userrejected') }}"> <i class="icon-padnote"></i>rafzakan </a></li>
            <li><a href="{{ route('dawakaryakan') }}"> <i class="icon-padnote"></i>contacts </a></li>

            </li>
            <li><a href="{{ route('qbull') }}"> <i class="icon-logout"></i>qbullakan </a></li>
    </ul>


  </nav>
