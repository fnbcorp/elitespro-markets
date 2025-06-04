<header class="navbar-fixed">
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded">
        <div class="sidebar-left"> <a class="navbar-brand imglogo" href="#"><img style="width:110%; height:90%;"
                    src="#"></a>
            <button class="btn btn-link icon-header mr-sm-2 pull-right menu-collapse"><span
                    class="fa fa-bars"></span></button>
        </div>

        <div class="d-flex mr-auto"> &nbsp;</div>
        <ul class="navbar-nav content-right">
            <li class="align-self-center">
                <!-- hidden-md-down -->

            </li>

            <div class="notification-container">
                <div class="notification-bell" id="notificationBell">
                    <i class="fa fa-bell"></i>
                    <span class="notification-count" id="notificationCount">1</span>
                </div>
                <div class="notification-dropdown" id="notificationDropdown">
                    <h4>Notification</h4>
                    <p id="notificationMessage">
                        Don&#039;t miss out on potential profits. Upgrade your plan now and get instant access to expert
                        signals.
                    </p>
                </div>
            </div>
            <li class="v-devider"></li>
            <li class="v-devider"></li>
            <li class="nav-item"> <a class="btn btn-link icon-header menu-collapse-right" href="#"><span
                        class="fa fa-podcast"></span> </a> </li>
        </ul>
        <div class="sidebar-right pull-right ">
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item">
                    <button class="btn-link btn userprofile" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><span class="userpic">
                            <img src="#" alt="user pic"></span> <span
                            class="text">{{ auth()->user()->name }}</span></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('home') }}"><i class="fa fa-house"></i> Home</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="{{ route('dashboard.deposits') }}"><i
                                class="fa fa-dollar-sign"></i> Deposit</a>
                        <a class="dropdown-item" href="{{ route('dashboard.withdrawals') }}"><i
                                class="fa fa-chart-bar"></i> Withdraw</a>
                        <a class="dropdown-item" href="{{ route('dashboard.transactions') }}"><i
                                class="fa fa-exchange"></i> Transactions</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <span class="fa fa-sign-out" style="color: white;"></span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        {{-- <input type="hidden" name="_token" value="85xUYBOBUnPRrt7hMIvu59ucOc39E7dfQXZQZFcf"> --}}
                    </form>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>