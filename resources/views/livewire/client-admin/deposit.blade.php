<?php
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;
use App\Models\Wallet;

new
    #[Title('Deposit')]
    #[Layout('components.layouts.client-app')]
    class extends Component {


    public $wallets;
    public function rules(): array
    {
        return [
            // 'amount' => ['required', 'numeric', 'min:0.01'],
            // 'method' => ['required', Rules\Enum::class],
        ];
    }
    public function mount(Wallet $wallet): void
    {
        // Initialization logic if needed
        $this->wallets = Wallet::get();
    }
}
?>

<div>
    @include('partials.client-admin-partials.mini-nav')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header align-items-start justify-content-between flex">
                    <h4 class="pull-left">Deposit Using Crypto</h4>
                    <ul class="nav nav-pills card-header-pills pull-right">
                        <li class="nav-item">
                            <button class="btn btn-sm btn-link btn-round" data-toggle="collapse"
                                data-target="#btc_deposit"><i class="fa fa-chevron-down"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-body" id="btc_deposit">
                    <div class="row">
                        {{-- loop through wallet --}}
                        @foreach ($wallets as $wallet)
                            <div class="col-16 col-md-8">
                                <div class="ncard small">
                                    <h6>{{ $wallet->name }} Deposit Method</h6>
                                    <hr>
                                    <b>
                                        <span style="color:gold"> Please make sure you upload your payment proof for quick
                                            payment
                                            verification</span><br>
                                        <span style="color:#17a2b8 !important">On confirmation, our system will
                                            automatically
                                            convert your
                                            {{ $wallet->name }} to live value of Dollars. Ensure
                                            that you deposit the actual {{ $wallet->name }} to the address specified on the
                                            payment
                                            Page.
                                        </span>
                                    </b>
                                    <br>
                                    <hr>

                                    <form onsubmit="event.preventDefault(); copyWallet(event);">
                                        <div class="input-group mb-3" style="width:80%">
                                            <input style="color:black" id="myInputa" type="text"
                                                value="{{ $wallet->address }}" class="form-control" readonly=""
                                                visibility_annotation="false">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-success" value="Copy Wallet">Copy
                                                    Wallet</button>
                                            </div>
                                        </div>
                                    </form>
                                    {{-- <br><br> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>