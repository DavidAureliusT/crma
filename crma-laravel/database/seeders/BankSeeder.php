<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            [
                'code' => '002',
                'name' => 'Bank BRI'
            ],
            [
                'code' => '008',
                'name' => 'Bank Mandiri'
            ],
            [
                'code' => '009',
                'name' => 'Bank BNI'
            ],
            [
                'code' => '011',
                'name' => 'Bank Danamon'
            ],
            [
                'code' => '013',
                'name' => 'Bank Permata'
            ],
            [
                'code' => '013',
                'name' => 'Bank Permata Syariah'
            ],
            [
                'code' => '014',
                'name' => 'Bank BCA'
            ],
            [
                'code' => '016',
                'name' => 'Bank Maybank'
            ],
            [
                'code' => '019',
                'name' => 'Bank Panin'
            ],
            [
                'code' => '020',
                'name' => 'Bank Arta Niaga Kencana'
            ],
            [
                'code' => '022',
                'name' => 'Bank CIMB Niaga'
            ],
            [
                'code' => '022',
                'name' => 'Bank CIMB Niaga Syariah'
            ],
            [
                'code' => '023',
                'name' => 'Bank UoB Indonesia'
            ],
            [
                'code' => '026',
                'name' => 'Bank Lippo'
            ],
            [
                'code' => '028',
                'name' => 'Bank OCBC NISP'
            ],
            [
                'code' => '030',
                'name' => 'American Express Bank Ltd.'
            ],
            [
                'code' => '031',
                'name' => 'Citibank'
            ],
            [
                'code' => '037',
                'name' => 'Bank Artha Graha Internasional'
            ],
        ]);
    }
    
    
}
