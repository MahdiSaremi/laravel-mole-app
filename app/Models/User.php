<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Rapid\Laplus\Present\HasPresent;
use Rapid\Laplus\Present\Present;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasPresent;

    protected function present(Present $present)
    {
        $present->id();
        $present->string('name');
        $present->unsignedBigInteger('coin')->default(0);
        $present->unsignedBigInteger('profit')->default(0);
        $present->string('email')->unique();
        $present->timestamp('email_verified_at')->nullable();
        $present->password();
        $present->rememberToken();
        $present->timestamps();
    }

    public function profits()
    {
        return $this->hasMany(UserProfit::class)->with('profit');
    }

    public function getProfitOf(Profit $profit)
    {
        return $this->profits()
            ->one()
            ->where('profit_id', $profit->id)
            ->getResults() ??
            $this->profits()->create(['profit_id' => $profit->id]);
    }

    public function refreshProfit()
    {
        $this->profit = $this->profits->map->getAmount()->sum();
    }
}
