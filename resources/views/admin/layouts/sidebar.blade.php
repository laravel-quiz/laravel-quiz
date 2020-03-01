 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{ route('admin.index') }}" aria-expanded="false">
                            <i class="fa fa-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('quiz.index') }}" aria-expanded="false">
                            <i class="fa fa-play menu-icon"></i><span class="nav-text">Play Quiz</span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="has-arrow" href="{{ route('users.index') }}" aria-expanded="false">
                            <i class="fa fa-user menu-icon"></i> <span class="nav-text">User</span>
                        </a>
                        <ul aria-expanded="false">
                            @can('create-user')<li><a href="{{ route('users.create') }}">Add User</a></li>@endcan
                            <li><a href="{{ route('users.index') }}">Manage User</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="has-arrow" href="{{ route('questionanswer') }}" aria-expanded="false">
                            <i class="fa fa-question menu-icon"></i> <span class="nav-text">Question</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href=" {{ route('questionanswer.create') }} ">Add Question</a></li>
                            <li><a href=" {{ route('questionanswer') }} ">Manage Question</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href=" {{ route('incorrectanswer') }} " aria-expanded="false">
                            <i class="fa fa-question menu-icon"></i> <span class="nav-text">InAnswer</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href=" {{ route('incorrectanswer.create') }} ">Add InAnswer</a></li>
                            <li><a href="{{ route('incorrectanswer') }} ">Manage InAnswer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href=" {{ route('category') }} " aria-expanded="false">
                            <i class="fa fa-list-alt menu-icon"></i> <span class="nav-text">Category</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href=" {{ route('category.create') }} ">Add Category</a></li>
                            <li><a href="{{ route('category') }} ">Manage Category</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
