
        <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
            @if (Auth::user()->role_id == 1)

                <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class="active" @endif>Dashboard</a>
                <a href="/datas" @if(request()->route()->uri == 'datas') class="active" @endif>Data</a>
                <a href="/risk" @if(request()->route()->uri == 'risk') class="active" @endif>Risiko</a>
                <a href="/users" @if(request()->route()->uri == 'users') class="active" @endif>Users</a>
                <a class= "border-top" href="{{ 'logout' }}" >Logout</a>
            @else
            {{-- <ul>
                <li><a href="{{ '#' }}">Profile</a></li>
            
                <li class="mt-1 mb-3 border-top"><i class="bi bi-power"></i><a href="{{ 'logout' }}"> &nbsp Logout</a></li>
            </ul> --}}
                <a href="/datas" @if(request()->route()->uri == 'datas') class="active" @endif>Data</a>
                <a href="/profile" @if(request()->route()->uri == 'profile') class="active" @endif>Profile</a>
                <a class= "border-top" href="/logout">Logout</a>
                @endif
        </div>
    