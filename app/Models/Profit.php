<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rapid\Laplus\Present\HasPresent;
use Rapid\Laplus\Present\Present;

class Profit extends Model
{
    use HasFactory, HasPresent;

    public function present(Present $present)
    {
        $present->id();
        $present->text('name');
        $present->file('image')->diskPublic();
        $present->unsignedBigInteger('base_price');
        $present->float('price_power');
        $present->unsignedBigInteger('base_amount');
        $present->float('amount_power');
        $present->foreignTo(ProfitTab::class);
        $present->timestamps();
    }

    public function tab()
    {
        return $this->belongsTo(ProfitTab::class);
    }

    public function forUser()
    {
        return auth()->user()->getProfitOf($this);
    }
}
