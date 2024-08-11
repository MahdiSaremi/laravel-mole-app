<?php

namespace Database\Seeders;

use App\Models\Profit;
use App\Models\ProfitTab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profit::query()->delete();
        ProfitTab::query()->delete();

        $tabTeam = ProfitTab::create([
            'name' => "تیم",
        ]);
        $tabMarket = ProfitTab::create([
            'name' => "مارکت",
        ]);

        $tabTeam->profits()->create([
            'name' => "مدیر عامل",
            'image' => 'mine/ceo.png',
            'base_price' => 500,
            'price_power' => 2,
            'base_amount' => 500,
            'amount_power' => 0.5,
        ]);
        $tabTeam->profits()->create([
            'name' => "بازاریابی",
            'image' => 'mine/bullhorn.png',
            'base_price' => 500,
            'price_power' => 2,
            'base_amount' => 500,
            'amount_power' => 0.5,
        ]);
        $tabTeam->profits()->create([
            'name' => "تیم IT",
            'image' => 'mine/consultant.png',
            'base_price' => 500,
            'price_power' => 2,
            'base_amount' => 500,
            'amount_power' => 0.5,
        ]);
        $tabTeam->profits()->create([
            'name' => "پشتیبانی",
            'image' => 'mine/customer-service.png',
            'base_price' => 500,
            'price_power' => 2,
            'base_amount' => 500,
            'amount_power' => 0.5,
        ]);

        $tabMarket->profits()->create([
            'name' => "طرفدار توکن",
            'image' => 'mine/tokens.png',
            'base_price' => 500,
            'price_power' => 2,
            'base_amount' => 500,
            'amount_power' => 0.5,
        ]);
        $tabMarket->profits()->create([
            'name' => "سهام",
            'image' => 'mine/security.png',
            'base_price' => 500,
            'price_power' => 2,
            'base_amount' => 500,
            'amount_power' => 0.5,
        ]);
        $tabMarket->profits()->create([
            'name' => "BTC",
            'image' => 'mine/bitcoin.png',
            'base_price' => 500,
            'price_power' => 2,
            'base_amount' => 500,
            'amount_power' => 0.5,
        ]);
        $tabMarket->profits()->create([
            'name' => "ETH",
            'image' => 'mine/crypto.png',
            'base_price' => 500,
            'price_power' => 2,
            'base_amount' => 500,
            'amount_power' => 0.5,
        ]);
    }
}
