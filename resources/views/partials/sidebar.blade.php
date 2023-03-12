<div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
    @if (Auth::user())
        @if (Auth::user()->role_id == 1)
            <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class="active" @endif>Dashboard</a>
            <a href="/admindatas" @if (request()->route()->uri == 'admindatas' || request()->route()->uri == 'admindatas/filter') class="active" @endif>Data</a>
            <a href="/risks" @if (request()->route()->uri == 'risks' || request()->route()->uri == 'risk-show/{slug}') class="active" @endif>Risiko</a>
            <a href="/users" @if (request()->route()->uri == 'users' ||
                    request()->route()->uri == 'user-add' ||
                    request()->route()->uri == 'user-deleted' ||
                    request()->route()->uri == 'user-delete/{slug}' ||
                    request()->route()->uri == 'user-edit/{slug}' ||
                    request()->route()->uri == 'user-show/{slug}') class="active" @endif>Users</a>
            <a class="border-top" href="{{ 'logout' }}">Logout</a>
        @else
            {{-- <ul>
                <li><a href="{{ '#' }}">Profile</a></li>

                <li class="mt-1 mb-3 border-top"><i class="bi bi-power"></i><a href="{{ 'logout' }}"> &nbsp Logout</a></li>
            </ul> --}}
            <a href="/userdatas" @if (request()->route()->uri == 'userdatas' ||
                    request()->route()->uri == 'userdatas/filter' ||
                    request()->route()->uri == 'userdatas-add' ||
                    request()->route()->uri == 'userdatas-form' ||
                    request()->route()->uri == 'userdatas-nameform') class="active" @endif>Data</a>

            <a href="/profile/{{ Auth::user()->username }}"
                @if (request()->route()->uri == 'profile/{slug}') class="active" @endif>Profile</a>
            <a class="border-top" href="/logout">Logout</a>
        @endif
    @endif
</div>
