<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountBalance extends Model
{
    //
    protected $table = 'account_balance';
    protected $fillable = [
        // 'profit_loss',
        'total_balance',
        'total_bonus',
        'total_profit',
        'currency',
        'deposit'
    ];
    protected $casts = [
        // 'profit_loss' => 'decimal:2',
        'total_balance' => 'decimal:2',
        'total_bonus' => 'decimal:2',
        'total_profit' => 'decimal:2',
        'deposit' => 'decimal:2',
    ];
    protected $attributes = [
        'profit_loss' => 0.00,
        'total_balance' => 0.00,
        'total_bonus' => 0.00,
        'total_profit' => 0.00,
        'deposit' => 0.00,
        'currency' => '$',
    ];
    public $timestamps = true;

    public function accountProfile()
    {
        return $this->belongsTo(AccountProfile::class, 'account_profile_id');
    }
    // public function getFormattedProfitLossAttribute()
    // {
    //     return $this->currency . number_format($this->profit_loss, 2);
    // }
    public function getFormattedTotalBalanceAttribute()
    {
        return $this->currency . number_format($this->total_balance, 2);
    }
    public function getFormattedDepositAttribute()
    {
        return $this->currency . number_format($this->deposit, 2);
    }
    public function getFormattedTotalBonusAttribute()
    {
        return $this->currency . number_format($this->total_bonus, 2);
    }
    public function getFormattedTotalProfitAttribute()
    {
        return $this->currency . number_format($this->total_profit, 2);
    }
    public function getCurrencyAttribute($value)
    {
        return $value ?: '$'; // Default to '$' if currency is not set
    }
    public function setCurrencyAttribute($value)
    {
        $this->attributes['currency'] = $value ?: '$'; // Default to '$' if currency is not set
    }
    public function getBalanceSummaryAttribute()
    {
        return [
            // 'profit_loss' => $this->formatted_profit_loss,
            'total_balance' => $this->formatted_total_balance,
            'total_bonus' => $this->formatted_total_bonus,
            'total_profit' => $this->formatted_total_profit,
            'deposit' => $this->formatted_deposit,
            'currency' => $this->currency,
        ];
    }
    public function getProfitLossRatioAttribute()
    {
        if ($this->profit_loss < 0) {
            // All loss, no profit
            return 0;
        }
        // If you have separate profit and loss columns, use them here
        // For now, assume profit_loss is net profit (profit - loss)
        // So ratio is not meaningful unless you track both
        return $this->total_profit != 0 && abs($this->profit_loss) != 0
            ? $this->total_profit / abs($this->profit_loss)
            : null;
    }
    // public function getBalanceSummary()
    // {
    //     return $this->balance_summary;
    // }
    // public function updateBalance($profitLoss, $totalBalance, $totalBonus, $totalProfit)
    // {
    //     $this->profit_loss = $profitLoss;
    //     $this->total_balance = $totalBalance;
    //     $this->total_bonus = $totalBonus;
    //     $this->total_profit = $totalProfit;
    //     $this->save();
    // }
    // public function resetBalance()
    // {
    //     $this->profit_loss = 0.00;
    //     $this->total_balance = 0.00;
    //     $this->total_bonus = 0.00;
    //     $this->total_profit = 0.00;
    //     $this->save();
    // }
    // public function scopeWithCurrency($query, $currency)
    // {
    //     return $query->where('currency', $currency);
    // }
    // public function scopeWithMinimumBalance($query, $minBalance)
    // {
    //     return $query->where('total_balance', '>=', $minBalance);
    // }
}
