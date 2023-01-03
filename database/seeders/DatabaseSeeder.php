<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Yasir',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456789'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

        $customer = [
            [
                'name' => 'Zuhdi',
                'phone' => '08987654321',
                'email' => 'zuhdi@gmail.com',
                'address' => 'Bekasi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nadya',
                'phone' => '08987654322',
                'email' => 'nadya@gmail.com',
                'address' => 'Depok',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rivaldi',
                'phone' => '08987654323',
                'email' => 'rivaldi@gmail.com',
                'address' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($customer as $key => $value) {
            Customer::create($value);
        }

        $product = [
            [
                'product_code' => mt_rand(000000, 999999),
                'product_name' => 'Kemeja Oxford Slim Fit Lengan Panjang',
                'price' => 299000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => mt_rand(000000, 999999),
                'product_name' => 'Jeans Potongan Klasik Helmut Lang',
                'price' => 499000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => mt_rand(000000, 999999),
                'product_name' => 'AIRism Katun T-Shirt Oversize Kerah Tinggi Uniqlo U',
                'price' => 129000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }

        $order = [
            [
                'order_date' => Carbon::parse('2020-02-04'),
                'created_at' => Carbon::parse('2020-02-04'),
                'updated_at' => Carbon::parse('2020-02-04')
            ],
            [
                'order_date' => Carbon::parse('2020-03-09'),
                'created_at' => Carbon::parse('2020-03-09'),
                'updated_at' => Carbon::parse('2020-03-09')
            ],
        ];

        foreach ($order as $key => $value) {
            Order::create($value);
        }

        $orderDetail = [
            [
                'order_id' => 1,
                'customer_id' => 1,
                'product_id' => 1,
                'invoice' => mt_rand(000000, 999999),
                'resi' => mt_rand(000000, 999999),
                'payment_proof' => mt_rand(000000, 999999),
                'qty' => 20,
                'total_price' => 5980000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 2,
                'customer_id' => 2,
                'product_id' => 2,
                'invoice' => mt_rand(000000, 999999),
                'resi' => mt_rand(000000, 999999),
                'payment_proof' => mt_rand(000000, 999999),
                'qty' => 10,
                'total_price' => 4990000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($orderDetail as $key => $value) {
            OrderDetail::create($value);
        }
    }
}
