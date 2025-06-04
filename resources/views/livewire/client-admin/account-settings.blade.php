<?php
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new
    #[Title('Account Settings')]
    #[Layout('components.layouts.client-app')]
    class extends Component {
    public function rules(): array
    {
        return [
            // 'amount' => ['required', 'numeric', 'min:0.01'],
            // 'method' => ['required', Rules\Enum::class],
        ];
    }
}
?>

<h1>Account Settings</h1>