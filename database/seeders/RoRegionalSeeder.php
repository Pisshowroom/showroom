<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoRegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['id' => 1, 'province_name' => 'Aceh'],
            ['id' => 2, 'province_name' => 'Bali'],
            ['id' => 3, 'province_name' => 'Banten'],
            ['id' => 4, 'province_name' => 'Bengkulu'],
            ['id' => 5, 'province_name' => 'Gorontalo'],
            ['id' => 6, 'province_name' => 'Jakarta'],
            ['id' => 7, 'province_name' => 'Jambi']
        ];

        DB::table('ro_provinces')->insert($provinces);

        $cities = [
            // Aceh
            ['id' => 1, 'ro_province_id' => 1, 'city_name' => 'Banda Aceh', 'postal_code' => '23111'],
            ['id' => 2, 'ro_province_id' => 1, 'city_name' => 'Lhokseumawe', 'postal_code' => '24351'],
            ['id' => 3, 'ro_province_id' => 1, 'city_name' => 'Langsa', 'postal_code' => '24411'],
            // Bali
            ['id' => 4, 'ro_province_id' => 2, 'city_name' => 'Denpasar', 'postal_code' => '80222'],
            ['id' => 5, 'ro_province_id' => 2, 'city_name' => 'Singaraja', 'postal_code' => '81119'],
            ['id' => 6, 'ro_province_id' => 2, 'city_name' => 'Tabanan', 'postal_code' => '82119'],
            // Banten
            ['id' => 7, 'ro_province_id' => 3, 'city_name' => 'Serang', 'postal_code' => '42111'],
            ['id' => 8, 'ro_province_id' => 3, 'city_name' => 'Tangerang', 'postal_code' => '15111'],
            ['id' => 9, 'ro_province_id' => 3, 'city_name' => 'Cilegon', 'postal_code' => '42411'],
            // Bengkulu
            ['id' => 10, 'ro_province_id' => 4, 'city_name' => 'Bengkulu', 'postal_code' => '38211'],
            ['id' => 11, 'ro_province_id' => 4, 'city_name' => 'Curup', 'postal_code' => '39119'],
            ['id' => 12, 'ro_province_id' => 4, 'city_name' => 'Manna', 'postal_code' => '38511'],
            // Gorontalo
            ['id' => 13, 'ro_province_id' => 5, 'city_name' => 'Gorontalo', 'postal_code' => '96115'],
            ['id' => 14, 'ro_province_id' => 5, 'city_name' => 'Limboto', 'postal_code' => '96161'],
            ['id' => 15, 'ro_province_id' => 5, 'city_name' => 'Tilamuta', 'postal_code' => '96262'],
            // Jakarta
            ['id' => 16, 'ro_province_id' => 6, 'city_name' => 'Jakarta Pusat', 'postal_code' => '10110'],
            ['id' => 17, 'ro_province_id' => 6, 'city_name' => 'Jakarta Selatan', 'postal_code' => '12210'],
            ['id' => 18, 'ro_province_id' => 6, 'city_name' => 'Jakarta Barat', 'postal_code' => '11220'],
            // Jambi
            ['id' => 19, 'ro_province_id' => 7, 'city_name' => 'Jambi', 'postal_code' => '36111'],
            ['id' => 20, 'ro_province_id' => 7, 'city_name' => 'Sungai Penuh', 'postal_code' => '37111'],
            ['id' => 21, 'ro_province_id' => 7, 'city_name' => 'Muara Bungo', 'postal_code' => '37211'],
        ];

        DB::table('ro_cities')->insert($cities);


        $subdistricts = [
            // Banda Aceh
            ['id' => 1, 'ro_city_id' => 1, 'subdistrict_name' => 'Baiturrahman'],
            ['id' => 2, 'ro_city_id' => 1, 'subdistrict_name' => 'Kuta Alam'],
            ['id' => 3, 'ro_city_id' => 1, 'subdistrict_name' => 'Syiah Kuala'],
            // Denpasar
            ['id' => 4, 'ro_city_id' => 4, 'subdistrict_name' => 'Denpasar Barat'],
            ['id' => 5, 'ro_city_id' => 4, 'subdistrict_name' => 'Denpasar Timur'],
            ['id' => 6, 'ro_city_id' => 4, 'subdistrict_name' => 'Denpasar Selatan'],
            // Serang
            ['id' => 7, 'ro_city_id' => 7, 'subdistrict_name' => 'Curug'],
            ['id' => 8, 'ro_city_id' => 7, 'subdistrict_name' => 'Taktakan'],
            ['id' => 9, 'ro_city_id' => 7, 'subdistrict_name' => 'Cipocok Jaya'],
            // Bengkulu
            ['id' => 10, 'ro_city_id' => 10, 'subdistrict_name' => 'Gading Cempaka'],
            ['id' => 11, 'ro_city_id' => 10, 'subdistrict_name' => 'Karang Tinggi'],
            ['id' => 12, 'ro_city_id' => 10, 'subdistrict_name' => 'Muara Bangkahulu'],
            // Gorontalo
            ['id' => 13, 'ro_city_id' => 13, 'subdistrict_name' => 'Dungingi'],
            ['id' => 14, 'ro_city_id' => 13, 'subdistrict_name' => 'Kota Barat'],
            ['id' => 15, 'ro_city_id' => 13, 'subdistrict_name' => 'Kota Selatan'],
            // Jakarta Pusat
            ['id' => 16, 'ro_city_id' => 16, 'subdistrict_name' => 'Gambir'],
            ['id' => 17, 'ro_city_id' => 16, 'subdistrict_name' => 'Tanah Abang'],
            ['id' => 18, 'ro_city_id' => 16, 'subdistrict_name' => 'Menteng'],
            // Jambi
            ['id' => 19, 'ro_city_id' => 19, 'subdistrict_name' => 'Jambi Selatan'],
            ['id' => 20, 'ro_city_id' => 19, 'subdistrict_name' => 'Jambi Timur'],
            ['id' => 21, 'ro_city_id' => 19, 'subdistrict_name' => 'Jambi Utara'],
        ];

        DB::table('ro_subdistricts')->insert($subdistricts);
    }
}
