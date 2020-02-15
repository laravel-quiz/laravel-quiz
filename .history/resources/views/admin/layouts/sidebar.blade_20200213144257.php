 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="" aria-expanded="false">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{ route('questionanswer') }}" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Question</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href=" {{ route('questionanswer.create') }} ">Add Question</a></li>
                            <li><a href=" {{ route('questionanswer.index') }} ">Manage Question</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href=" {{ route('questionincorrectanswer') }} " aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">InAnswer</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href=" {{ route('questionincorrectanswer.create') }} ">Add InAnswer</a></li>
                            <li><a href="{{ route('questionincorrectanswer') }} ">Manage INAnswer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
