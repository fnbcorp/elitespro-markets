<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //

    protected $fillable = [
        // 'account_profile_id',
        'name',
        'address',
    ];
    protected $table = 'wallets';
    // public function accountProfile()
    // {
    //     return $this->belongsTo(AccountProfile::class, 'account_profile_id');
    // }
}
