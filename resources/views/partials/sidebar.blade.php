<div class="slim-sidebar">
    <label class="sidebar-label">Navigation</label>
   
    <ul class="nav nav-sidebar">
        <li class=" sidebar-nav-item">
            <a href="{{ url('/') }}" class="sidebar-nav-link">
            <i class="icon ion-grid"></i> Dashboard Admin</a>
        </li>
       
      
        <li class=" sidebar-nav-item with-sub">
            <a href="#" class="sidebar-nav-link">
            <i class="icon ion-ios-book"></i>Data Master </a>
            <ul class="nav sidebar-nav-sub">
                <li class="nav-sub-item"><a href="{{route('roles.index')}}" class=" nav-sub-link">Roles</a></li>
                <li class="nav-sub-item"><a href="{{route('users.index')}}" class=" nav-sub-link">User</a></li>
            </ul>
        </li>
        <li class=" sidebar-nav-item with-sub">
            <a href="#" class="sidebar-nav-link">
            <i class="icon ion-clipboard"></i>Data Perjalanan </a>
            <ul class="nav sidebar-nav-sub">
                <li class="nav-sub-item"><a href="{{route('memorandum.index')}}" class=" nav-sub-link">Data Perjalanan</a></li>                        
            </ul>
        </li>
    </ul>
  
    </ul>
    
</div><!-- slim-sidebar -->