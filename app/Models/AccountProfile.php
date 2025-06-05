<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountProfile extends Model
{
    protected $table = 'account_profile';
    protected $fillable = [
        'country',
        'gender',
        'phone',
        'username',
        'user_id',
        'is_admin',
        'plain_password'
    ];
    protected $casts = [
        'is_admin' => 'boolean',
    ];
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function accountBalance()
    {
        return $this->hasOne(AccountBalance::class, 'account_profile_id');
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'account_profile_id');
    }
    // public function wallets()
    // {
    //     // return $this->hasMany(Wallet::class, 'account_profile_id');
    //     // if account profile is admin, return all wallets
    //     if ($this->is_admin) {
    //         return $this->hasMany(Wallet::class, 'account_profile_id');
    //     }
    // }

}
