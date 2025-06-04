<div class="row  align-items-center justify-content-between" style="margin-top:10px;">
    <div class="col-16 col-sm-16"
        style="padding: 0 15px; /*width: 100%; display: flex; max-width: 100%; flex: 0 0 100%;*/">
        <div class="btn-group pull-right" style="display: flex; flex-wrap: wrap; gap: 8px;">
            <a href="{{ route('dashboard') }}"><button class="btn btn-success btn-outline-light mr-0">
                    <span class="">Account</span>
                    <span class="text">
                        <i class="fa fa-tachometer"></i>
                    </span>
                </button></a>
            <a href="{{ route('dashboard.deposits') }}"><button class="btn btn-success btn-outline-light mr-0">
                    <span class="">Make Deposit</span>
                    <span class="text"><i class="fa fa-dollar-sign"></i></span></button>
            </a>
            <a href="{{ route('dashboard.withdrawals') }}"><button class="btn btn-success btn-outline-light mr-0">
                    <span class="">Withdraw Funds</span> <span class="text"><i class="fa fa-chart-bar"></i>
                    </span></button>
            </a>
            {{-- <button class="btn btn-success btn-outline-light mr-0" data-toggle="modal"
                data-target="#mail_support"><span class="">Mail Us</span> <span class="text"><i
                        class="fa fa-envelope"></i></span></button>
            <a href="{{ route('dashboard.settings') }}"><button class="btn btn-danger btn-outline-danger"><span
                        class="">Settings</span> <i class="fa fa-cog fa-spin ml-2"></i></button></a> --}}
        </div>

    </div>
</div>