<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = Status::create([
            'status' => 'Belum diproses'
        ]);

        $status = Status::create([
            'status' => 'Sedang diproses'
        ]);

        $status = Status::create([
            'status' => 'Selesai diproses'
        ]);
    }
}
