<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PartnerUser;

class PartnerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartnerUser::insert([
            [
                'user_id' => 1,
                'partner_id' => 1,
                'active' => true,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'user_id' => 1,
                'partner_id' => 3,
                'active' => true,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'user_id' => 2,
                'partner_id' => 2,
                'active' => true,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'user_id' => 2,
                'partner_id' => 3,
                'active' => true,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'user_id' => 2,
                'partner_id' => 4,
                'active' => true,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
        ]);
    }
}
