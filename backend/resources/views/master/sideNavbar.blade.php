<nav class="sidebar-wrapper box-shadow-1">
    <div>
        <div class="main-logo-img">
            <a href="/"><img src="{{ asset('images/logo.png') }}" /></a>
        </div>
        <div>
            <div class="sidebar-title title-styled">ACCOUNT</div>
            <ul class="sidebar-menu-container">
                <a href="/profile">
                    <li class="{{ Request::is('profile') ? 'active' : '' }}"><i
                            class="bi bi-person fa-xl"></i></i>Profile</li>
                </a>
            </ul>
            <div class="sidebar-title title-styled">OPERATION</div>
            <ul class="sidebar-menu-container">
                <a href="/personal">
                    <li class="{{ Request::is('personal') ? 'active' : '' }}">
                        <i class="bi bi-person-vcard fa-xl"></i>Personal
                    </li>
                </a>
                <a href="/department">
                    <li
                        class="{{ Request::is('department') ? 'active' : '' }}">
                        <i class="bi bi-building fa-xl"></i>General Department
                    </li>
                </a>
                <a href="/location">
                    <li
                        class="{{ Request::is('location') ? 'active' : '' }}">
                        <i class="bi bi-geo-alt-fill fa-xl"></i></i>location
                    </li>
                </a>
            </ul>
            <div class="sidebar-title title-styled">Report</div>
            <ul class="sidebar-menu-container">
                <a href="/fraud-report">
                    <li><i class="bi bi-journal fa-xl"></i>Fraud Report</li>
                </a>
                <a href="/crime-report">
                    <li><i class="bi bi-journal fa-xl"></i>Crime Report</li>
                </a>
                <a href="/lost-and-found-report">
                    <li><i class="bi bi-journal fa-xl"></i>Lost and Found Report</li>
                </a>
                <a href="/incident-report">
                    <li><i class="bi bi-journal fa-xl"></i>Incident Report</li>
                </a>
            </ul>
        </div>
    </div>
    <div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
    </div>
</nav>