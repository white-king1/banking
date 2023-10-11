<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transactions extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    protected $guarded = [ 'sender_id', 'receiver_id'];
}
