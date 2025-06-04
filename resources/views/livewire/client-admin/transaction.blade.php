<?php
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;
use App\Models\Transaction;

new
    #[Title('Transactions')]
    #[Layout('components.layouts.client-app')]
    class extends Component {
    public $transactions;
    public function mount(): void
    {
        $this->transactions = auth()->user()->accountProfile->transactions;
    }
    public function rules(): array
    {
        return [
            // 'amount' => ['required', 'numeric', 'min:0.01'],
            // 'method' => ['required', Rules\Enum::class],
        ];
    }
}
?>
<div>
    @include('partials.client-admin-partials.mini-nav')
    <div class="row">
        <div class="col-sm-16 col-md-16">
            <div class="card">
                {{-- --}}
                <div class="card-header align-items-start justify-content-between flex">
                    <h4 class="pull-left">Transactions</h4>
                    <ul class="nav nav-pills card-header-pills pull-right">
                        <li class="nav-item">
                            <button class="btn btn-sm btn-link btn-round" data-toggle="collapse"
                                data-target="#transaction_deposit"><i class="fa fa-chevron-down"></i></button>
                        </li>
                    </ul>
                </div>
                {{-- --}}
                <div class="card-body" id="transaction_deposit">
                    <div class="col-md-16">
                        <div class="card">
                            <div class="card-body">
                                {{-- --}}
                                {{-- --}}
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div class="table-responsive">
                                            <table id="DeposTbl" class="table table-hover ">
                                                <thead>
                                                    <tr>
                                                        <th>Amount</th>
                                                        <th>Payment mode</th>
                                                        <th>Status</th>
                                                        <th>Date created</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($transactions as $transaction)
                                                        <tr>
                                                            <td>
                                                                {{ $transaction->summary['amount'] }}

                                                            </td>

                                                            <td>{{ $transaction->payment_mode }}</td>
                                                            <td>

                                                                @if ($transaction->status === 'completed')
                                                                    <span class="badge badge-danger bg-success">Completed</span>
                                                                @elseif ($transaction->status === 'pending')
                                                                    <span class="badge badge-danger bg-warning">Pending</span>
                                                                @elseif ($transaction->status === 'failed')
                                                                    <span class="badge badge-danger bg-danger">Failed</span>

                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ $transaction->created_at->format('d M Y h:i A') }}
                                                            </td>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>