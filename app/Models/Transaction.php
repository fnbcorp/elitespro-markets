<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transaction';
    protected $fillable = [
        'account_profile_id',
        'transaction_type',
        'amount',
        'status',
        'payment_mode',
        'currency'
    ];
    protected $casts = [
        'amount' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function accountProfile()
    {
        return $this->belongsTo(AccountProfile::class, 'account_profile_id');
    }
    public function getFormattedAmountAttribute()
    {
        return $this->currency . number_format($this->amount, 2);
    }
    public function getSummaryAttribute()
    {
        return [
            // 'profit_loss' => $this->formatted_profit_loss,
            'amount' => $this->formatted_amount
        ];
    }

    public function getCurrencyAttribute($value)
    {
        return $value ?: '$'; // Default to '$' if currency is not set
    }
    public function setCurrencyAttribute($value)
    {
        $this->attributes['currency'] = $value ?: '$'; // Default to '$' if currency is not set
    }
    // public function scopePending($query)
    // {
    //     return $query->where('status', 'pending');
    // }
    // public function scopeCompleted($query)
    // {
    //     return $query->where('status', 'completed');
    // }
    // public function scopeFailed($query)
    // {
    //     return $query->where('status', 'failed');
    // }
    // public function scopeByType($query, $type)
    // {
    //     return $query->where('transaction_type', $type);
    // }
    // public function scopeByPaymentMode($query, $mode)
    // {
    //     return $query->where('payment_mode', $mode);
    // }
    // public function scopeRecent($query, $days = 30)
    // {
    //     return $query->where('created_at', '>=', now()->subDays($days));
    // }
    // public function scopeHighValue($query, $threshold = 1000)
    // {
    //     return $query->where('amount', '>', $threshold);
    // }
    // public function scopeLowValue($query, $threshold = 100)
    // {
    //     return $query->where('amount', '<=', $threshold);
    // }
    public function scopeByAccountProfile($query, $accountProfileId)
    {
        return $query->where('account_profile_id', $accountProfileId);
    }
    public function scopeWithAccountProfile($query)
    {
        return $query->with('accountProfile');
    }
    public function scopeWithRecentTransactions($query, $days = 30)
    {
        return $query->where('created_at', '>=', now()->subDays($days))
            ->with('accountProfile');
    }
}
