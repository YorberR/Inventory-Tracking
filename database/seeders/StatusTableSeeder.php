<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::insert([
            ['id' => 1, 'status' => 'Pending'],
            ['id' => 2, 'status' => 'Confirmed'],
            ['id' => 3, 'status' => 'In Progress'],
            ['id' => 4, 'status' => 'Completed'],
            ['id' => 5, 'status' => 'Cancelled'],
            ['id' => 6, 'status' => 'Rejected'],
            ['id' => 7, 'status' => 'Returned'],
            ['id' => 8, 'status' => 'Refunded'],
        ]);
    }
}
