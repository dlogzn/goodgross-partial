<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Account extends Model
{
    protected $guarded = [];
    protected $table = 'accounts';


    public function personalAccount(): HasOne
    {
        return $this->hasOne(PersonalAccount::class);
    }

    public function businessAccount(): HasOne
    {
        return $this->hasOne(BusinessAccount::class);
    }

    public function guestAccount(): HasOne
    {
        return $this->hasOne(GuestAccount::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function accountShippingToAddresses(): HasMany
    {
        return $this->hasMany(AccountShippingToAddress::class);
    }

    public function accountShippingFromAddresses(): HasMany
    {
        return $this->hasMany(AccountShippingFromAddress::class);
    }

    public function accountShippingReturnAddresses(): HasMany
    {
        return $this->hasMany(AccountShippingReturnAddress::class);
    }

    public function accountBillingAddresses(): HasMany
    {
        return $this->hasMany(AccountBillingAddress::class);
    }

    public function accountCards(): HasMany
    {
        return $this->hasMany(AccountCard::class);
    }
}
