<?php
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;
use App\Models\Wallet;
new
    #[Title('Withdraw Funds')]
    #[Layout('components.layouts.client-app')]
    class extends Component {
    public $wallets;
    public $amount;
    public $wallet_address;
    public $wallet_name;

    public function rules(): array
    {
        return [
            'amount' => ['required', 'numeric', 'min:0.01'],
            'wallet_address' => ['required', 'string', 'min:10'],
            'wallet_name' => ['required', 'string', 'max:255'],
            // 'method' => ['required', Rules\Enum::class],
        ];
    }
    public function mount()
    {
        $this->wallets = Wallet::get();
    }

    public function makeWidthdrawal()
    {
        $this->validate();
        \DB::transaction(function () {
            // Here you would typically handle the withdrawal logic, such as updating the user's balance,
            // creating a withdrawal record, etc.

            // For example:
            // $withdrawal = auth()->user()->accountProfile->accountBalance->withdrawals()->create([
            //     'amount' => $this->amount,
            //     'wallet_address' => $this->wallet_address,
            //     'wallet_name' => $this->wallet_name,
            //     'status' => 'pending', // or whatever status you want to set
            // ]);
            // Optionally, you can send a notification email to the user here
            // Mail::to(auth()->user()->email)->send(new WithdrawalRequestSubmitted($withdrawal));
            // Flash a success message to the session
            session()->flash('status_success', 'Withdrawal request has been submitted successfully. An email will be sent to you for confirmation and further instructions.');
            redirect()->route('dashboard.withdrawals');
        });
    }
}
?>

<div class="card" id="hip">
    <div class="card-header">
        <h5 class="font-weight-bold">
            <span style="float:left">Request Withdrawal</span>
            <span style="float:right;font-size:15px">Balance : <span
                    style="color:green">{{ auth()->user()->accountProfile->accountBalance->balance_summary['total_balance'] }}</span></span>
        </h5>
    </div>
    <div class="card-body">
        <div class="container_wizard wizard-bordered">
            {{-- <x-auth-session-status class="text-center" :status="session('status')" /> --}}
            <form wire:submit.prevent="makeWidthdrawal">

                {{-- <input type="hidden" name="_token" value="85xUYBOBUnPRrt7hMIvu59ucOc39E7dfQXZQZFcf"> --}}
                @csrf
                <div class="row setup-content tab">
                    <div class="col-sm-16">
                        <div class="row">
                            <div class="col-sm-16">
                                <h3 class="text-white mb-2">Payment Details</h3>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-16 col-md-8 col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Withdrawal Type</label>
                                    <select wire:model="wallet_name" {{-- onchange="methodCheck(this)" --}}
                                        name="method" value="" class="form-control">
                                        <option> -- select withdrawal method --
                                        </option>
                                        @foreach ($wallets as $wallet)
                                            <option value="{{ $wallet->name }}" data-method="crypto">
                                                {{ $wallet->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-form-status name="wallet_name" />
                                </div>
                                <div class="form-group" id="cryptot">
                                    <label class="form-control-label">Wallet Address</label>
                                    <input wire:model="wallet_address" type="text" id="walletaddress"
                                        name="wallet_address" class="form-control" autocomplete="off"
                                        placeholder="Enter Wallet Address">
                                    <x-form-status name="wallet_address" />
                                </div>

                                {{-- <div id="bankt" style="display:none;">
                                    <div class="form-group">
                                        <label class="form-control-label">Bank Name</label>
                                        <input type="text" maxlength="100" class="form-control" name="bankname"
                                            placeholder="Enter Bank Name" id="bankname" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Account Name</label>
                                        <input type="text" maxlength="100" class="form-control" name="account_name"
                                            placeholder="Enter Account Name" id="	account_name" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Account Number</label>
                                        <input type="number" minlength="10" maxlength="12" class="form-control"
                                            name="account_number" placeholder="Enter Account Number" autocomplete="off"
                                            id="accountnumber" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <!-- <label class="form-control-label">Amount $</label> -->
                                        <input type="hidden" step="any" min="1" class="form-control" name="2" value="2"
                                            id="amountb">
                                    </div>
                                </div> --}}

                                <div class="form-group">
                                    <label class="form-control-label">Amount $</label>
                                    <input wire:model="amount" type="number" class="form-control" name="amount"
                                        placeholder="0.00" autocomplete="off">
                                    <x-form-status name="amount" />
                                </div>


                            </div>
                            <div class="col-sm-16 col-md-8 col-lg-10">
                                <div align="left" class="text hidden-sm-down hidden-md-down">
                                    <span class="text">
                                        <span style="font-weight:bold">Withdrawing Funds – How Does It Work?</span><br>
                                        At our platform, we have designed our withdrawal process to be as easy and
                                        secured as our
                                        funding process.
                                        To begin the withdrawal process first fill your account information then select
                                        your
                                        preferred withdrawal
                                        method and then type in the amount you want to withdraw
                                        {{-- , verify your identity by
                                        uploading a
                                        valid ID --}}
                                        and click "Request Withdrawal".
                                        <br>
                                        <span style="font-weight:bold">What Methods Are There For Withdrawal Of
                                            Funds?</span><br>
                                        We provide provide better withdrawal methods like (Bitcoin, PayPal, Bank
                                        Transfer and lot
                                        more).
                                        <br>
                                        <span style="font-weight:bold">Must Withdrawal Requests Only Be Made At Certain
                                            Times?</span><br>
                                        Requests for withdrawals can be made at any time via our platform. The requests
                                        will be
                                        processed immediately, and during the relevant financial institutions’ business
                                        hours.
                                        <br>
                                        <span style="font-weight:bold">Is There A Withdrawal Limit?</span><br>
                                        Withdrawals are capped at the amount of funds that are currently in the account.
                                        <br>
                                        <span style="font-weight:bold">How Long Does It Take To Get My Money?</span><br>
                                        Withdrawal requests are addressed and handled as quickly as possible.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="col-sm-16 ">
                                {{-- <input type="hidden" name="_token"
                                    value="85xUYBOBUnPRrt7hMIvu59ucOc39E7dfQXZQZFcf">
                                <button class="btn btn-danger nextBtn btn-lg pull-left" type="button" id="prevBtn"
                                    onclick="nextPrev(-1)">Previous</button> --}}
                                <button wire:loading.attr="disabled" type="submit"
                                    class="btn btn-success btn-lg pull-left">Request<span wire:loading>ing</span>
                                    Withdrawal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@if (session()->has('status_success'))

    <script>
        Swal.fire({
            position: 'center',
            title: 'Success',
            text: '{{ session('status_success') }}',
            icon: 'success',
            // showConfirmButton: false,
            // timer: 1600
            confirmButtonText: 'OK',
        });
    </script>
@elseif (session()->has('status_error'))
    <script>
        Swal.fire({
            position: 'center',
            title: 'Error',
            text: '{{ session('status_error') }}',
            icon: 'error',
            // showConfirmButton: false,
            // timer: 1600
            confirmButtonText: 'OK',
        });
    </script>
@endif