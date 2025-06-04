<x-layouts.client-app :title="__('Dashboard')">
    {{-- <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div
            class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div> --}}
    <div class="row mgt5">
        {{-- --}}
        <div class="col-8 col-sm-8 col-md-4 col-lg-4 col-xl-4">
            <div class="activity-block  success">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-weight-bold">
                            <span class="">
                                {{ auth()->user()->accountProfile->accountBalance->balance_summary['total_balance'] }}
                            </span>
                            </span>
                        </h5>
                        <p>Total Balance</p>
                    </div>
                    <i class="fa fa-chart-bar"></i>
                </div>
                <div class="row">
                    <div class="progress ">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100" style="width: 60%;"><span class="trackerball"></span></div>
                    </div>
                </div>
                <i style="margin-top:-12px;" class="bg-icon text-center fa fa-chart-bar"></i>
            </div>
        </div>
        {{-- --}}
        <div class="col-8 col-sm-8 col-md-4 col-lg-4 col-xl-4">
            <div class="activity-block  success">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-weight-bold"><span class="">
                                {{ auth()->user()->accountProfile->accountBalance->balance_summary['total_profit']}}
                            </span></h5>
                        <p>Profit</p>
                    </div>
                    <i class="fa fa-dollar-sign"></i>
                </div>
                <div class="row">
                    <div class="progress ">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100" style="width: 86%;"><span class="trackerball"></span></div>
                    </div>
                </div>
                <i style="margin-top:-12px;" class="bg-icon text-center fa fa-dollar-sign"></i>
            </div>
        </div>
        {{-- --}}
        <div class="col-8 col-sm-8 col-md-4 col-lg-4 col-xl-4">
            <div class="activity-block  success">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-weight-bold"><span
                                class="">{{ auth()->user()->accountProfile->accountBalance->balance_summary['total_bonus']}}</span>
                        </h5>
                        <p>Total Bonus</p>
                    </div>
                    <i class="fa fa-users"></i>
                </div>
                <div class="row">
                    <div class="progress ">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100" style="width: 45%;"><span class="trackerball"></span></div>
                    </div>
                </div>
                <i style="margin-top:-12px;" class="bg-icon text-center fa fa-users"></i>
            </div>
        </div>
        {{-- --}}
        <div class="col-8 col-sm-8 col-md-4 col-lg-4 col-xl-4">
            <div class="activity-block  success">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-weight-bold"><span
                                class="">{{ auth()->user()->accountProfile->accountBalance->balance_summary['deposit'] }}</span>
                        </h5>
                        <p>Total Deposit</p>
                    </div>
                    <i class="fas fa-money-bill-transfer"></i>
                </div>
                <div class="row">
                    <div class="progress ">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100" style="width: 45%;"><span class="trackerball"></span></div>
                    </div>
                </div>
                <i style="margin-top:-12px;" class="bg-icon text-center fas fa-money-bill-transfer"></i>
            </div>
        </div>
        {{-- --}}
        {{-- <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-4">
            <div class="activity-block  success">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-weight-bold"><span class=""><i style="color:#0f0;font-size:20px"
                                    class="fa fa-times-circle  blink_me"> <small>Unverified</small> </span>
                            </button></i></span>
                        </h5>
                        <p>Account Status</p>
                    </div>
                    <i class="fa fa-address-card"></i>
                </div>
                <div class="row">
                    <div class="progress ">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100" style="width: 80%;"><span class="trackerball"></span></div>
                    </div>
                </div>
                <i style="margin-top:-12px;" class="bg-icon text-center fa fa-address-card"></i>
            </div>
        </div> --}}
    </div>
    {{-- --}}
    {{-- <div class="row mgt5">
        <!-- Total Trades -->
        <div class="col-8 col-sm-8 col-md-4 col-lg-4 col-xl-4">
            <div class="activity-block  success">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-weight-bold">
                            <span class="">26</span>
                        </h5>
                        <p>Total Trades</p>
                    </div>
                    <i class="fa fa-chart-line"></i>
                </div>
                <div class="row">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;">
                            <span class="trackerball"></span>
                        </div>
                    </div>
                </div>
                <i style="margin-top:-12px;" class="bg-icon text-center fa fa-chart-line"></i>
            </div>
        </div>
        <!-- Open Trades -->
        <div class="col-8 col-sm-8 col-md-4 col-lg-4 col-xl-4">
            <div class="activity-block  success">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-weight-bold">
                            <span class="">0</span>
                        </h5>
                        <p>Open Trades</p>
                    </div>
                    <i class="fa fa-folder-open"></i>
                </div>
                <div class="row">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;">
                            <span class="trackerball"></span>
                        </div>
                    </div>
                </div>
                <i style="margin-top:-12px;" class="bg-icon text-center fa fa-folder-open"></i>
            </div>
        </div>
        <!-- Closed Trades -->
        <div class="col-8 col-sm-8 col-md-4 col-lg-4 col-xl-4">
            <div class="activity-block  success">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-weight-bold">
                            <span class="">26</span>
                        </h5>
                        <p>Closed Trades</p>
                    </div>
                    <i class="fa fa-folder"></i>
                </div>
                <div class="row">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;">
                            <span class="trackerball"></span>
                        </div>
                    </div>
                </div>
                <i style="margin-top:-12px;" class="bg-icon text-center fa fa-folder"></i>
            </div>
        </div>
        <!-- Win/Loss Ratio -->
        <div class="col-8 col-sm-8 col-md-4 col-lg-4 col-xl-4">
            <div class="activity-block  success">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-weight-bold">
                            <span class="">1.1</span>
                        </h5>
                        <p>Win/Loss Ratio</p>
                    </div>
                    <i class="fa fa-trophy"></i>
                </div>
                <div class="row">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;">
                            <span class="trackerball"></span>
                        </div>
                    </div>
                </div>
                <i style="margin-top:-12px;" class="bg-icon text-center fa fa-trophy"></i>
            </div>
        </div>
    </div> --}}
    {{-- --}}
    @include('partials.client-admin-partials.mini-nav')
    {{-- <div class="row  align-items-center justify-content-between" style="margin-top:10px">
        <div class="col-16 col-sm-16">
            <div class="btn-group pull-right">
                <a href="https://tradexpro.profoundcoinminingfx.com/dashboard"><button
                        class="btn btn-success btn-outline-light"><span class="">Account</span> <span class="text"><i
                                class="fa fa-tachometer"></i></span></button></a>
                <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/deposits"><button
                        class="btn btn-success btn-outline-light"><span class="">Make Deposit</span> <span
                            class="text"><i class="fa fa-dollar-sign"></i></span></button></a>
                <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/withdrawals"><button
                        class="btn btn-success btn-outline-light"><span class="">Withdraw Funds</span> <span
                            class="text"><i class="fa fa-chart-bar"></i></span></button></a>
                <button class="btn btn-success btn-outline-light" data-toggle="modal" data-target="#mail_support"><span
                        class="">Mail Us</span> <span class="text"><i class="fa fa-envelope"></i></span></button>
                <a href="https://tradexpro.profoundcoinminingfx.com/dashboard/account-settings"><button
                        class="btn btn-danger btn-outline-danger"><span class="">Settings</span> <i
                            class="fa fa-cog fa-spin ml-2"></i></button></a>
            </div>
        </div>
    </div> --}}
    <hr>
    @include('partials.client-admin-partials.crypto-live-chart')
    @include('partials.client-admin-partials.crypto-charts')

</x-layouts.client-app>