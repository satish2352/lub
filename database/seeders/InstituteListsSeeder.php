<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InstituteLists;

class InstituteListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InstituteLists::create(
            [
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'institute_type' => '',
                'institute_name' => '',
                'institute_university_id' => '',
                'is_deleted' => false,
                'is_active' => true,
            ]);
    }
}
