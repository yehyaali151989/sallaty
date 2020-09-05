<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            'default_locale' => 'en',
            'default_timezone' => 'Asia/China',
            'reviews_enabled' => true,
            'auto_aprove_reviews' => true,
            'supported_currencies' => ['USD', 'SP'],
            'default_currency' => 'USD',
            'store_email' => 'yehyaali151989@gmail.com',
            'search_engine' => 'mysql',
            'local_pickup_cost' => 0,
            'outer_shipping_cost' => 0,
            'free_shipping_cost' => 0,
            'translatable' => [
                'store_name' => 'Sallaty',
                'free_shipping_label' => 'Free Shipping',
                'local_label' => 'Local Shipping',
                'outer_label' => 'Outer Shipping',
            ],
        ]);
    }
}
