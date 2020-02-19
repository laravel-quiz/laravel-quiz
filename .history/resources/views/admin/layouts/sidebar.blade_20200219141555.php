 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{ route('admin.index') }}" aria-expanded="false">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{ route('users.index') }}" aria-expanded="false">
                            <i class="icon-user menu-icon"></i> <span class="nav-text">User</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('users.create') }}">Add User</a></li>
                            <li><a href="{{ route('users.index') }}">Manage User</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{ route('questionanswer') }}" aria-expanded="false">
                            <i class="icon-question menu-icon"></i> <span class="nav-text">Question</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href=" {{ route('questionanswer.create') }} ">Add Question</a></li>
                            <li><a href=" {{ route('questionanswer') }} ">Manage Question</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href=" {{ route('incorrectanswer') }} " aria-expanded="false">
                            <i class="icon-question menu-icon"></i> <span class="nav-text">InAnswer</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href=" {{ route('incorrectanswer.create') }} ">Add InAnswer</a></li>
                            <li><a href="{{ route('incorrectanswer') }} ">Manage InAnswer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href=" {{ route('category') }} " aria-expanded="false">
                            <i class="icon-question menu-icon"></i> <span class="nav-text">InAnswer</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href=" {{ route('category.create') }} ">Add Categor</a></li>
                            <li><a href="{{ route('category') }} ">Manage InAnswer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
