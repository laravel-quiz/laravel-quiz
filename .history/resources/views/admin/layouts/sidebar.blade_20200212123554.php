 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{ route('home') }}" aria-expanded="false">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{ route('users.index') }}" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">User</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('users.create') }}">Add User</a></li>
                            <li><a href="{{ route('users.index') }}">Manage User</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
