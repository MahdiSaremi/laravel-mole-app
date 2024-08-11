<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rapid\Laplus\Present\HasPresent;
use Rapid\Laplus\Present\Present;

class ProfitTab extends Model
{
    use HasFactory, HasPresent;

    public function present(Present $present)
    {
        $present->id();
        $present->text('name');
        $present->timestamps();
    }

    public function profits()
    {
        return $this->hasMany(Profit::class);
    }
}
