<?php

namespace App;

use App\Scopes\BuyerScope;
use App\Transaction;

class Buyer extends User
{

    /** use buyer global scope method every time we need to building query */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new BuyerScope());
    }

    /** relation between buyer and transactions */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
