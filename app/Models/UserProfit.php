<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rapid\Laplus\Present\HasPresent;
use Rapid\Laplus\Present\Present;

class UserProfit extends Model
{
    use HasFactory, HasPresent;

    public function present(Present $present)
    {
        $present->id();
        $present->foreignTo(User::class);
        $present->foreignTo(Profit::class);
        $present->unsignedInteger('level')->default(0);
        $present->timestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profit()
    {
        return $this->belongsTo(Profit::class);
    }

    public function getPrice()
    {
        return $this->profit->base_price * pow($this->level + 1, $this->profit->price_power);
    }

    public function getAmount()
    {
        if ($this->level == 0)
        {
            return 0;
        }

        return $this->profit->base_amount * pow($this->level, $this->profit->amount_power);
    }
}
