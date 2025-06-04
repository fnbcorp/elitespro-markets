<div class="sidebar-left">
        <div class="user-menu-items">
                <div class="list-unstyled btn-group">
                        <button class="media btn btn-link" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <br>
                                <span class="message_userpic"><img class="d-flex" src="#"
                                                alt="Generic user image"></span>
                                <span class="media-body"> <span class="mt-0 mb-1">{{ auth()->user()->name }}</span>
                                        <small> Not Verified</small> </span> </button>
                </div>
        </div>
        <br>
        <ul class="nav flex-column in" id="side-menu">
                <li class=" nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link ">
                                <i class="fa fa-tachometer"></i>
                                Account
                        </a>
                </li>
                <li class=" nav-item">
                        <a href="{{ route('dashboard.deposits') }}" class="nav-link ">
                                <i class="fa fa-dollar-sign"></i>
                                Deposit
                        </a>
                </li>
                <li class=" nav-item">
                        <a href="{{ route('dashboard.withdrawals') }}" class="nav-link ">
                                <i class="fas fa-wallet"></i>
                                Withdraw
                        </a>
                </li>
                {{--
                <li class=" nav-item">
                        <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/trade" class="nav-link ">
                                <i class="fa fa-chevron-right"></i>
                                Trade</a>
                </li>

                <li class=" nav-item">
                        <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/copy-trading" class="nav-link "><i
                                        class="fa fa-copy"></i>Copy Experts</a>
                </li>
                <li class=" nav-item">
                        <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/buy-plan" class="nav-link "><i
                                        class="fas fa-briefcase"></i> Subscribe</a>
                </li>
                <li class=" nav-item">
                        <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/nft-gallery" class="nav-link "><i
                                        class="fas fa-gem"></i> NFTS</a>
                </li>
                <li class=" nav-item"><a
                                href="https://tradexpro.profoundcoinminingfx.com/dashboard/singalssubscriptions"
                                class="nav-link "><i class="fa fa-signal"></i> Signal</a></li>
                <li class=" nav-item">
                        <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/loans/apply" class="nav-link "><i
                                        class="fas fa-hand-holding-usd"></i> Loan</a>
                </li>
                <li class=" nav-item">
                        <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/tradinghistory"
                                class="nav-link "><i class="fas fa-history"></i> History</a>
                </li> --}}
                <li class=" nav-item">
                        <a href="{{ route('dashboard.transactions') }}" class="nav-link ">
                                <i class="fas fa-money-bill-transfer">
                                </i> Transactions
                        </a>
                </li>

                {{-- </li> --}}
                {{-- <li class=" nav-item">
                        <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/news" class="nav-link "><i
                                        class="fa fa-newspaper"></i>News </a>
                </li> --}}
                {{-- <li class=" nav-item">
                        <a href="{{ route('dashboard.settings') }}" class="nav-link ">
                                <i class="fa fa-cogs"></i>
                                Account Settings
                        </a>
                </li> --}}

                {{--
                <li class=" nav-item">
                        <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/referuser" class="nav-link  "><i
                                        class="fas fa-retweet fa"></i>Referrals </a>
                </li> --}}
                <li class=" nav-item">
                        <a href="{{ route('logout') }}" class="nav-link " onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>
                                Logout

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                </form>
                        </a>
                </li>
                {{-- <li class="title-nav">
                <li class="nav-item ">
                        <a href="javascript:void(0)" class="menudropdown nav-link">Live Analysis<i
                                        class="fa fa-angle-down "></i></a>
                        <ul class="nav flex-column nav-second-level ">
                                <li class="nav-item"><a class="nav-link"
                                                href="https://tradexpro.profoundcoinminingfx.com/dashboard/technical"><i
                                                        class="fa fa-arrows-alt"></i>
                                                Technical Analysis</a></li>
                                <li class="nav-item"><a class="nav-link"
                                                href="https://tradexpro.profoundcoinminingfx.com/dashboard/chart"><i
                                                        class="fa fa-chart-area"></i> Live Market Chart</a>
                                <li class="nav-item"><a class="nav-link"
                                                href="https://tradexpro.profoundcoinminingfx.com/dashboard/calendar"><i
                                                        class="fa fa-calendar-alt"></i>
                                                Market Calendar</a>
                                </li>
                        </ul>
                        <!-- /.nav-second-level -->
                </li>
                </li> --}}
        </ul>
        <hr>
        {{-- <ul class="nav flex-column in">
                <li class="nav-item "><a href="#" class="nav-link">
                                <span>
                                        <span class="dynamicsparkline2">
                                                <canvas width="201" height="60"
                                                        style="display: inline-block; width: 201px; height: 60px; vertical-align: top;"></canvas>
                                        </span>
                                </span></a></li>

        </ul> --}}
        {{--
        <hr>
        <br>
        <br> --}}

</div>