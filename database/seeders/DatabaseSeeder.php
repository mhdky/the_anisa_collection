<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use App\Models\Province;
use App\Models\StoreInformation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Muhammad Rizki',
            'email' => 'mhdky502@gmail.com',
            'is_admin' => 1,
            'password' => Hash::make('password')
        ]);

        // Product::factory(500)->create();

        Category::create([
            'name' => 'Men Collection',
            'slug' => 'men'
        ]);
        
        Category::create([
            'name' => 'Women Collection',
            'slug' => 'women'
        ]);

        StoreInformation::create([
            'store_address'  => 'Sidodadi',
            'phone_number' => '082246924258',
            'store_email' => 'mhdky502@gmail.com',
            'instagram' => '',
            'facebook' => '',
            'open' => '09.00',
            'close' => '10.00',
        ]);

        Province::create([
            // id = 1
            'name' => 'Aceh'
        ]);
        Province::create([
            // id = 2
            'name' => 'Bali'
        ]);
        Province::create([
            // id = 3
            'name' => 'Bangka Belitung'
        ]);
        Province::create([
            // id = 4
            'name' => 'Banten'
        ]);
        Province::create([
            // id = 5
            'name' => 'Bengkulu'
        ]);
        Province::create([
            // id = 6
            'name' => 'DKI Jakarta'
        ]);
        Province::create([
            // id = 7
            'name' => 'Gorontalo'
        ]);
        Province::create([
            // id = 8
            'name' => 'Jambi'
        ]);
        Province::create([
            // id = 9
            'name' => 'Jawa Barat'
        ]);
        Province::create([
            // id = 10
            'name' => 'Jawa Tengah'
        ]);
        Province::create([
            // id = 11
            'name' => 'Jawa Timur'
        ]);
        Province::create([
            // id = 12
            'name' => 'Kalimantan Barat'
        ]);
        Province::create([
            // id = 13
            'name' => 'Kalimantan Selatan'
        ]);
        Province::create([
            // id = 14
            'name' => 'Kalimantan Tengah'
        ]);
        Province::create([
            // id = 15
            'name' => 'Kalimantan Timur'
        ]);
        Province::create([
            // id = 16
            'name' => 'Kalimantan Utara'
        ]);
        Province::create([
            // id = 17
            'name' => 'Kepulauan Riau'
        ]);
        Province::create([
            // id = 18
            'name' => 'Lampung'
        ]);
        Province::create([
            // id = 19
            'name' => 'Maluku'
        ]);
        Province::create([
            // id = 20
            'name' => 'Maluku Utara'
        ]);
        Province::create([
            // id = 21
            'name' => 'Nusa Tenggara Barat'
        ]);
        Province::create([
            // id = 22
            'name' => 'Nusa Tenggara Timur'
        ]);
        Province::create([
            // id = 23
            'name' => 'Papua'
        ]);
        Province::create([
            // id = 24
            'name' => 'Papua Barat'
        ]);
        Province::create([
            // id = 25
            'name' => 'Riau'
        ]);
        Province::create([
            // id = 26
            'name' => 'Sulawesi Barat'
        ]);
        Province::create([
            // id = 27
            'name' => 'Sulawesi Selatan'
        ]);
        Province::create([
            // id = 28
            'name' => 'Sulawesi Tengah'
        ]);
        Province::create([
            // id = 29
            'name' => 'Sulawesi Tenggara'
        ]);
        Province::create([
            // id = 30
            'name' => 'Sulawesi Utara'
        ]);
        Province::create([
            // id = 31
            'name' => 'Sumatera Barat'
        ]);
        Province::create([
            // id = 32
            'name' => 'Sumatera Selatan'
        ]);
        Province::create([
            // id = 33
            'name' => 'Sumatera Utara'
        ]);
        Province::create([
            // id = 34
            'name' => 'Yogyakarta'
        ]);

        City::create([
            // city_id = 1
            'province_id' => 1,
            'name' => 'Kab. Aceh Barat',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 2
            'province_id' => 1,
            'name' => 'Kab. Aceh Barat Daya',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 3
            'province_id' => 1,
            'name' => 'Kab. Aceh Besar',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 4
            'province_id' => 1,
            'name' => 'Kab. Aceh Jaya',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 5
            'province_id' => 1,
            'name' => 'Kab. Aceh Selatan',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 6
            'province_id' => 1,
            'name' => 'Kab. Aceh Singkil',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 7
            'province_id' => 1,
            'name' => 'Kab. Aceh Tamiang',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 8
            'province_id' => 1,
            'name' => 'Kab. Aceh Tengah',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 9
            'province_id' => 1,
            'name' => 'Kab. Aceh Tenggara',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 10
            'province_id' => 1,
            'name' => 'Kab. Aceh Timur',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 11
            'province_id' => 1,
            'name' => 'Kab. Aceh Utara',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 12
            'province_id' => 1,
            'name' => 'Kab. Aceh Bener Meriah',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 13
            'province_id' => 1,
            'name' => 'Kab. Bireun',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 14
            'province_id' => 1,
            'name' => 'Kab. Gayo Lues',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 15
            'province_id' => 1,
            'name' => 'Kab. Nagan Raya',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 16
            'province_id' => 1,
            'name' => 'Kab. Pidie',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 17
            'province_id' => 1,
            'name' => 'Kab. Pidie Jaya',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 18
            'province_id' => 1,
            'name' => 'Kab. Simeulue',
            'shipping_cost' => 51000
        ]);
        City::create([
            // city_id = 19
            'province_id' => 1,
            'name' => 'Kota Banda Aceh',
            'shipping_cost' => 33000
        ]);
        City::create([
            // city_id = 20
            'province_id' => 1,
            'name' => 'Kota Langsa',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 21
            'province_id' => 1,
            'name' => 'Kota Lhokseumawe',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 22
            'province_id' => 1,
            'name' => 'Kota Sabang',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 23
            'province_id' => 1,
            'name' => 'Kota Subulussalam',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 24
            'province_id' => 2,
            'name' => 'Kab. Badung',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 25
            'province_id' => 2,
            'name' => 'Kab. Bangli',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 26
            'province_id' => 2,
            'name' => 'Kab. Buleleng',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 27
            'province_id' => 2,
            'name' => 'Kab. Gianyar',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 28
            'province_id' => 2,
            'name' => 'Kab. Jembrana',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 29
            'province_id' => 2,
            'name' => 'Kab. Karangasem',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 30
            'province_id' => 2,
            'name' => 'Kab. Klungkung',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 31
            'province_id' => 2,
            'name' => 'Kab. Tabanan',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 32
            'province_id' => 2,
            'name' => 'Kota Denpasar',
            'shipping_cost' => 58000
        ]);
        City::create([
            // city_id = 33
            'province_id' => 3,
            'name' => 'Kab. Bangka',
            'shipping_cost' => 86000
        ]);
        City::create([
            // city_id = 34
            'province_id' => 3,
            'name' => 'Kab. Bangka Barat',
            'shipping_cost' => 80000
        ]);
        City::create([
            // city_id = 35
            'province_id' => 3,
            'name' => 'Kab. Bangka Selatan',
            'shipping_cost' => 86000
        ]);
        City::create([
            // city_id = 36
            'province_id' => 3,
            'name' => 'Kab. Bangka Tengah',
            'shipping_cost' => 80000
        ]);
        City::create([
            // city_id = 37
            'province_id' => 3,
            'name' => 'Kab. Belitung',
            'shipping_cost' => 86000
        ]);
        City::create([
            // city_id = 38
            'province_id' => 3,
            'name' => 'Kab. Belitung Timur',
            'shipping_cost' => 86000
        ]);
        City::create([
            // city_id = 39
            'province_id' => 3,
            'name' => 'Kota Pangkal Pinang',
            'shipping_cost' => 74000
        ]);
        City::create([
            // city_id = 40
            'province_id' => 4,
            'name' => 'Kab. Lebak',
            'shipping_cost' => 55000
        ]);
        City::create([
            // city_id = 41
            'province_id' => 4,
            'name' => 'Kab. Pandeglang',
            'shipping_cost' => 55000
        ]);
        City::create([
            // city_id = 42
            'province_id' => 4,
            'name' => 'Kab. Serang',
            'shipping_cost' => 52000
        ]);
        City::create([
            // city_id = 43
            'province_id' => 4,
            'name' => 'Kab. Tangerang',
            'shipping_cost' => 48000
        ]);
        City::create([
            // city_id = 44
            'province_id' => 4,
            'name' => 'Kab. Cilegon',
            'shipping_cost' => 49000
        ]);
        City::create([
            // city_id = 45
            'province_id' => 4,
            'name' => 'Kota Serang',
            'shipping_cost' => 49000
        ]);
        City::create([
            // city_id = 46
            'province_id' => 4,
            'name' => 'Kota Tangerang',
            'shipping_cost' => 48000
        ]);
        City::create([
            // city_id = 47
            'province_id' => 4,
            'name' => 'Kota Tangerang Selatan',
            'shipping_cost' => 48000
        ]);
        City::create([
            // city_id = 48
            'province_id' => 5,
            'name' => 'Kab. Bengkulu Selatan',
            'shipping_cost' => 90000
        ]);
        City::create([
            // city_id = 49
            'province_id' => 5,
            'name' => 'Kab. Bengkulu Tengah',
            'shipping_cost' => 90000
        ]);
        City::create([
            // city_id = 50
            'province_id' => 5,
            'name' => 'Kab. Bengkulu Utara',
            'shipping_cost' => 90000
        ]);
        City::create([
            // city_id = 51
            'province_id' => 5,
            'name' => 'Kab. Kaur',
            'shipping_cost' => 90000
        ]);
        City::create([
            // city_id = 52
            'province_id' => 5,
            'name' => 'Kab. Kepahiang',
            'shipping_cost' => 90000
        ]);
        City::create([
            // city_id = 53
            'province_id' => 5,
            'name' => 'Kab. Lebong',
            'shipping_cost' => 82000
        ]);
        City::create([
            // city_id = 54
            'province_id' => 5,
            'name' => 'Kab. Muko Muko',
            'shipping_cost' => 90000
        ]);
        City::create([
            // city_id = 55
            'province_id' => 5,
            'name' => 'Kab. Rejang Lebong',
            'shipping_cost' => 90000
        ]);
        City::create([
            // city_id = 56
            'province_id' => 5,
            'name' => 'Kab. Seluma',
            'shipping_cost' => 90000
        ]);
        City::create([
            // city_id = 57
            'province_id' => 5,
            'name' => 'Kota Bengkulu',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 58
            'province_id' => 6,
            'name' => 'Jakarta Barat',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 59
            'province_id' => 6,
            'name' => 'Jakarta Pusat',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 60
            'province_id' => 6,
            'name' => 'Jakarta Selatan',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 61
            'province_id' => 6,
            'name' => 'Jakarta Timur',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 62
            'province_id' => 6,
            'name' => 'Jakarta Utara',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 63
            'province_id' => 6,
            'name' => 'Kab. Kepulauan Seribu',
            'shipping_cost' => 47000
        ]);
        City::create([
            // city_id = 64
            'province_id' => 7,
            'name' => 'Kab. Boalemo',
            'shipping_cost' => 148000
        ]);
        City::create([
            // city_id = 65
            'province_id' => 7,
            'name' => 'Kab. Bone Balango',
            'shipping_cost' => 148000
        ]);
        City::create([
            // city_id = 66
            'province_id' => 7,
            'name' => 'Kab. Gorontalo',
            'shipping_cost' => 148000
        ]);
        City::create([
            // city_id = 67
            'province_id' => 7,
            'name' => 'Kab. Gorontalo Utara',
            'shipping_cost' => 148000
        ]);
        City::create([
            // city_id = 68
            'province_id' => 7,
            'name' => 'Kab. Pohuwato',
            'shipping_cost' => 148000
        ]);
        City::create([
            // city_id = 69
            'province_id' => 7,
            'name' => 'Kota Gorontalo',
            'shipping_cost' => 127000
        ]);
        City::create([
            // city_id = 70
            'province_id' => 8,
            'name' => 'Kab. Batang Hari',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 71
            'province_id' => 8,
            'name' => 'Kab. Bungo',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 72
            'province_id' => 8,
            'name' => 'Kab. Kerinci',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 73
            'province_id' => 8,
            'name' => 'Kab. Merangin',
            'shipping_cost' => 66000
        ]);
        City::create([
            // city_id = 74
            'province_id' => 8,
            'name' => 'Kab. Muaro Jambi',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 75
            'province_id' => 8,
            'name' => 'Kab. Sarolangun',
            'shipping_cost' => 78000
        ]);
        City::create([
            // city_id = 76
            'province_id' => 8,
            'name' => 'Kab. Tanjung Jabung Barat',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 77
            'province_id' => 8,
            'name' => 'Kab. Tanjung Jabung Timur',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 78
            'province_id' => 8,
            'name' => 'Kab. Tebo',
            'shipping_cost' => 66000
        ]);
        City::create([
            // city_id = 79
            'province_id' => 8,
            'name' => 'Kota Jambi',
            'shipping_cost' => 60000
        ]);
        City::create([
            // city_id = 80
            'province_id' => 8,
            'name' => 'Kota Sungai Penuh',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 81
            'province_id' => 9,
            'name' => 'Kab. Bandung',
            'shipping_cost' => 49000
        ]);
        City::create([
            // city_id = 82
            'province_id' => 9,
            'name' => 'Kab. Bandung Barat',
            'shipping_cost' => 49000
        ]);
        City::create([
            // city_id = 83
            'province_id' => 9,
            'name' => 'Kab. Bekasi',
            'shipping_cost' => 48000
        ]);
        City::create([
            // city_id = 84
            'province_id' => 9,
            'name' => 'Kab. Bogor',
            'shipping_cost' => 48000
        ]);
        City::create([
            // city_id = 85
            'province_id' => 9,
            'name' => 'Kab. Ciamis',
            'shipping_cost' => 60000
        ]);
        City::create([
            // city_id = 86
            'province_id' => 9,
            'name' => 'Kab. Cianjur',
            'shipping_cost' => 55000
        ]);
        City::create([
            // city_id = 87
            'province_id' => 9,
            'name' => 'Kab. Cirebon',
            'shipping_cost' => 52000
        ]);
        City::create([
            // city_id = 88
            'province_id' => 9,
            'name' => 'Kab. Garut',
            'shipping_cost' => 55000
        ]);
        City::create([
            // city_id = 89
            'province_id' => 9,
            'name' => 'Kab. Indramayu',
            'shipping_cost' => 55000
        ]);
        City::create([
            // city_id = 90
            'province_id' => 9,
            'name' => 'Kab. Karawang',
            'shipping_cost' => 55000
        ]);
        City::create([
            // city_id = 91
            'province_id' => 9,
            'name' => 'Kab. Kuningan',
            'shipping_cost' => 55000
        ]);
        City::create([
            // city_id = 92
            'province_id' => 9,
            'name' => 'Kab. Majalengka',
            'shipping_cost' => 55000
        ]);
        City::create([
            // city_id = 93
            'province_id' => 9,
            'name' => 'Kab. Pangandaran',
            'shipping_cost' => 60000
        ]);
        City::create([
            // city_id = 94
            'province_id' => 9,
            'name' => 'Kab. Purwakarta',
            'shipping_cost' => 49000
        ]);
        City::create([
            // city_id = 95
            'province_id' => 9,
            'name' => 'Kab. Subang',
            'shipping_cost' => 55000
        ]);
        City::create([
            // city_id = 96
            'province_id' => 9,
            'name' => 'Kab. Sukabumi',
            'shipping_cost' => 60000
        ]);
        City::create([
            // city_id = 97
            'province_id' => 9,
            'name' => 'Kab. Sumedang',
            'shipping_cost' => 55000
        ]);
        City::create([
            // city_id = 98
            'province_id' => 9,
            'name' => 'Kab. Tasikmalaya',
            'shipping_cost' => 57000
        ]);
        City::create([
            // city_id = 99
            'province_id' => 9,
            'name' => 'Kota Bandung',
            'shipping_cost' => 49000
        ]);
        City::create([
            // city_id = 100
            'province_id' => 9,
            'name' => 'Kota Banjar',
            'shipping_cost' => 57000
        ]);
        City::create([
            // city_id = 101
            'province_id' => 9,
            'name' => 'Kota Bekasi',
            'shipping_cost' => 48000
        ]);
        City::create([
            // city_id = 102
            'province_id' => 9,
            'name' => 'Kota Bogor',
            'shipping_cost' => 48000
        ]);
        City::create([
            // city_id = 103
            'province_id' => 9,
            'name' => 'Kota Cimahi',
            'shipping_cost' => 49000
        ]);
        City::create([
            // city_id = 104
            'province_id' => 9,
            'name' => 'Kota Cirebon',
            'shipping_cost' => 49000
        ]);
        City::create([
            // city_id = 105
            'province_id' => 9,
            'name' => 'Kota Depok',
            'shipping_cost' => 48000
        ]);
        City::create([
            // city_id = 106
            'province_id' => 9,
            'name' => 'Kota Sukabumi',
            'shipping_cost' => 54000
        ]);
        City::create([
            // city_id = 107
            'province_id' => 9,
            'name' => 'Kota Tasikmalaya',
            'shipping_cost' => 57000
        ]);
        City::create([
            // city_id = 108
            'province_id' => 10,
            'name' => 'Kab. Banjarnegara',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 109
            'province_id' => 10,
            'name' => 'Kab. Banyumas',
            'shipping_cost' => 66000
        ]);
        City::create([
            // city_id = 110
            'province_id' => 10,
            'name' => 'Kab. Batang',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 111
            'province_id' => 10,
            'name' => 'Kab. Blora',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 112
            'province_id' => 10,
            'name' => 'Kab. Boyolali',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 113
            'province_id' => 10,
            'name' => 'Kab. Brebes',
            'shipping_cost' => 69000
        ]);
        City::create([
            // city_id = 114
            'province_id' => 10,
            'name' => 'Kab. Cilacap',
            'shipping_cost' => 73000
        ]);
        City::create([
            // city_id = 115
            'province_id' => 10,
            'name' => 'Kab. Demak',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 116
            'province_id' => 10,
            'name' => 'Kab. Grobogan',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 117
            'province_id' => 10,
            'name' => 'Kab. Jepara',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 118
            'province_id' => 10,
            'name' => 'Kab. Karang Anyar',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 119
            'province_id' => 10,
            'name' => 'Kab. Kebumen',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 120
            'province_id' => 10,
            'name' => 'Kab. Kendal',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 121
            'province_id' => 10,
            'name' => 'Kab. Klaten',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 122
            'province_id' => 10,
            'name' => 'Kab. Kudus',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 123
            'province_id' => 10,
            'name' => 'Kab. Magelang',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 124
            'province_id' => 10,
            'name' => 'Kab. Pati',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 125
            'province_id' => 10,
            'name' => 'Kab. Pekalongan',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 126
            'province_id' => 10,
            'name' => 'Kab. Pemalang',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 127
            'province_id' => 10,
            'name' => 'Kab. Purbalingga',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 128
            'province_id' => 10,
            'name' => 'Kab. Purworejo',
            'shipping_cost' => 69000
        ]);
        City::create([
            // city_id = 129
            'province_id' => 10,
            'name' => 'Kab. Rembang',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 130
            'province_id' => 10,
            'name' => 'Kab. Semarang',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 131
            'province_id' => 10,
            'name' => 'Kab. Sragen',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 132
            'province_id' => 10,
            'name' => 'Kab. Sukoharjo',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 133
            'province_id' => 10,
            'name' => 'Kab. Tegal',
            'shipping_cost' => 66000
        ]);
        City::create([
            // city_id = 134
            'province_id' => 10,
            'name' => 'Kab. Temanggung',
            'shipping_cost' => 69000
        ]);
        City::create([
            // city_id = 135
            'province_id' => 10,
            'name' => 'Kab. Wonogiri',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 136
            'province_id' => 10,
            'name' => 'Kab. Wonosobo',
            'shipping_cost' => 66000
        ]);
        City::create([
            // city_id = 137
            'province_id' => 10,
            'name' => 'Kota Magelang',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 138
            'province_id' => 10,
            'name' => 'Kota Pekalongan',
            'shipping_cost' => 61000
        ]);
        City::create([
            // city_id = 139
            'province_id' => 10,
            'name' => 'Kota Salatiga',
            'shipping_cost' => 61000
        ]);
        City::create([
            // city_id = 140
            'province_id' => 10,
            'name' => 'Kota Semarang',
            'shipping_cost' => 58000
        ]);
        City::create([
            // city_id = 141
            'province_id' => 10,
            'name' => 'Kota Surakarta',
            'shipping_cost' => 58000
        ]);
        City::create([
            // city_id = 142
            'province_id' => 10,
            'name' => 'Kota Tegal',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 143
            'province_id' => 11,
            'name' => 'Kab. Bangkalan',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 144
            'province_id' => 11,
            'name' => 'Kab. Banyuwangi',
            'shipping_cost' => 73000
        ]);
        City::create([
            // city_id = 145
            'province_id' => 11,
            'name' => 'Kab. Blitar',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 146
            'province_id' => 11,
            'name' => 'Kab. Bojonegoro',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 147
            'province_id' => 11,
            'name' => 'Kab. Bondowoso',
            'shipping_cost' => 70000
        ]);
        City::create([
            // city_id = 148
            'province_id' => 11,
            'name' => 'Kab. Gresik',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 149
            'province_id' => 11,
            'name' => 'Kab. Jember',
            'shipping_cost' => 67000
        ]);
        City::create([
            // city_id = 150
            'province_id' => 11,
            'name' => 'Kab. Jombang',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 151
            'province_id' => 11,
            'name' => 'Kab. Kediri',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 152
            'province_id' => 11,
            'name' => 'Kab. Lamongan',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 153
            'province_id' => 11,
            'name' => 'Kab. Lumajang',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 154
            'province_id' => 11,
            'name' => 'Kab. Madiun',
            'shipping_cost' => 73000
        ]);
        City::create([
            // city_id = 155
            'province_id' => 11,
            'name' => 'Kab. Magetan',
            'shipping_cost' => 73000
        ]);
        City::create([
            // city_id = 156
            'province_id' => 11,
            'name' => 'Kab. Malang',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 157
            'province_id' => 11,
            'name' => 'Kab. Mojokerto',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 158
            'province_id' => 11,
            'name' => 'Kab. Nganjuk',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 159
            'province_id' => 11,
            'name' => 'Kab. Ngawi',
            'shipping_cost' => 73000
        ]);
        City::create([
            // city_id = 160
            'province_id' => 11,
            'name' => 'Kab. Pacitan',
            'shipping_cost' => 73000
        ]);
        City::create([
            // city_id = 161
            'province_id' => 11,
            'name' => 'Kab. Pemakasan',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 162
            'province_id' => 11,
            'name' => 'Kab. Pasuruan',
            'shipping_cost' => 67000
        ]);
        City::create([
            // city_id = 163
            'province_id' => 11,
            'name' => 'Kab. Ponogoro',
            'shipping_cost' => 73000
        ]);
        City::create([
            // city_id = 164
            'province_id' => 11,
            'name' => 'Kab. Probolinggo',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 165
            'province_id' => 11,
            'name' => 'Kab. Sampang',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 166
            'province_id' => 11,
            'name' => 'Kab. Sidoarjo',
            'shipping_cost' => 57000
        ]);
        City::create([
            // city_id = 167
            'province_id' => 11,
            'name' => 'Kab. Situbondo',
            'shipping_cost' => 68000
        ]);
        City::create([
            // city_id = 168
            'province_id' => 11,
            'name' => 'Kab. Sumenep',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 169
            'province_id' => 11,
            'name' => 'Kab. Trenggalek',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 170
            'province_id' => 11,
            'name' => 'Kab. Tuban',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 171
            'province_id' => 11,
            'name' => 'Kab. Tulungagung',
            'shipping_cost' => 63000
        ]);
        City::create([
            // city_id = 172
            'province_id' => 11,
            'name' => 'Kota Batu',
            'shipping_cost' => 65000
        ]);
        City::create([
            // city_id = 173
            'province_id' => 11,
            'name' => 'Kota Blitar',
            'shipping_cost' => 65000
        ]);
        City::create([
            // city_id = 174
            'province_id' => 11,
            'name' => 'Kota Kediri',
            'shipping_cost' => 62000
        ]);
        City::create([
            // city_id = 175
            'province_id' => 11,
            'name' => 'Kota Madiun',
            'shipping_cost' => 67000
        ]);
        City::create([
            // city_id = 176
            'province_id' => 11,
            'name' => 'Kota Malang',
            'shipping_cost' => 62000
        ]);
        City::create([
            // city_id = 177
            'province_id' => 11,
            'name' => 'Kota Mojokerto',
            'shipping_cost' => 62000
        ]);
        City::create([
            // city_id = 178
            'province_id' => 11,
            'name' => 'Kota Pasuruan',
            'shipping_cost' => 67000
        ]);
        City::create([
            // city_id = 179
            'province_id' => 11,
            'name' => 'Kota Probolinggo',
            'shipping_cost' => 62000
        ]);
        City::create([
            // city_id = 180
            'province_id' => 11,
            'name' => 'Kota Surabaya',
            'shipping_cost' => 57000
        ]);
        City::create([
            // city_id = 181
            'province_id' => 12,
            'name' => 'Kab. Bengkayang',
            'shipping_cost' => 92000
        ]);
        City::create([
            // city_id = 182
            'province_id' => 12,
            'name' => 'Kab. Kapuas Hulu',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 183
            'province_id' => 12,
            'name' => 'Kab. Kayong Utara',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 184
            'province_id' => 12,
            'name' => 'Kab. Ketapang',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 185
            'province_id' => 12,
            'name' => 'Kab. Kubu Raya',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 186
            'province_id' => 12,
            'name' => 'Kab. Landak',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 187
            'province_id' => 12,
            'name' => 'Kab. Melawi',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 188
            'province_id' => 12,
            'name' => 'Kab. Mempawah',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 189
            'province_id' => 12,
            'name' => 'Kab. Sambas',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 190
            'province_id' => 12,
            'name' => 'Kab. Sanggau',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 191
            'province_id' => 12,
            'name' => 'Kab. Sekadau',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 192
            'province_id' => 12,
            'name' => 'Kab. Sintang',
            'shipping_cost' => 103000
        ]);
        City::create([
            // city_id = 193
            'province_id' => 12,
            'name' => 'Kota Pontianak',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 194
            'province_id' => 12,
            'name' => 'Kota Singkawang',
            'shipping_cost' => 92000
        ]);
        City::create([
            // city_id = 195
            'province_id' => 13,
            'name' => 'Kab. Balangan',
            'shipping_cost' => 92000
        ]);
        City::create([
            // city_id = 196
            'province_id' => 13,
            'name' => 'Kab. Banjar',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 197
            'province_id' => 13,
            'name' => 'Kab. Barito Kuala',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 198
            'province_id' => 13,
            'name' => 'Kab. Hulu Sungai Selatan',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 199
            'province_id' => 13,
            'name' => 'Kab. Hulu Sungai Tengah',
            'shipping_cost' => 101000
        ]);
        City::create([
            // city_id = 200
            'province_id' => 13,
            'name' => 'Kab. Hulu Sungai Utara',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 201
            'province_id' => 13,
            'name' => 'Kab. Kotabaru',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 202
            'province_id' => 13,
            'name' => 'Kab. Tabalong',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 203
            'province_id' => 13,
            'name' => 'Kab. Tanah Bumbu',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 204
            'province_id' => 13,
            'name' => 'Kab. Tanah Laut',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 205
            'province_id' => 13,
            'name' => 'Kab. Tapin',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 206
            'province_id' => 13,
            'name' => 'Kota Banjarbaru',
            'shipping_cost' => 88000
        ]);
        City::create([
            // city_id = 207
            'province_id' => 13,
            'name' => 'Kota Banjarmasin',
            'shipping_cost' => 88000
        ]);
        City::create([
            // city_id = 208
            'province_id' => 14,
            'name' => 'Kab. Barito Selatan',
            'shipping_cost' => 101000
        ]);
        City::create([
            // city_id = 209
            'province_id' => 14,
            'name' => 'Kab. Barito Timur',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 210
            'province_id' => 14,
            'name' => 'Kab. Barito Utara',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 211
            'province_id' => 14,
            'name' => 'Kab. Gunung Mas',
            'shipping_cost' => 116000
        ]);
        City::create([
            // city_id = 212
            'province_id' => 14,
            'name' => 'Kab. Kapuas',
            'shipping_cost' => 105000
        ]);
        City::create([
            // city_id = 213
            'province_id' => 14,
            'name' => 'Kab. Katingan',
            'shipping_cost' => 116000
        ]);
        City::create([
            // city_id = 214
            'province_id' => 14,
            'name' => 'Kab. Kotawaringin Barat',
            'shipping_cost' => 95000
        ]);
        City::create([
            // city_id = 215
            'province_id' => 14,
            'name' => 'Kab. Kotawaringin Timur',
            'shipping_cost' => 105000
        ]);
        City::create([
            // city_id = 216
            'province_id' => 14,
            'name' => 'Kab. Lamandau',
            'shipping_cost' => 105000
        ]);
        City::create([
            // city_id = 217
            'province_id' => 14,
            'name' => 'Kab. Murung Raya',
            'shipping_cost' => 112000
        ]);
        City::create([
            // city_id = 218
            'province_id' => 14,
            'name' => 'Kab. Pulang Pisau',
            'shipping_cost' => 105000
        ]);
        City::create([
            // city_id = 219
            'province_id' => 14,
            'name' => 'Kab. Seruyan',
            'shipping_cost' => 105000
        ]);
        City::create([
            // city_id = 220
            'province_id' => 14,
            'name' => 'Kab. Sukamara',
            'shipping_cost' => 105000
        ]);
        City::create([
            // city_id = 221
            'province_id' => 14,
            'name' => 'Kota Palangka Raya',
            'shipping_cost' => 105000
        ]);
        City::create([
            // city_id = 222
            'province_id' => 15,
            'name' => 'Kab. Berau',
            'shipping_cost' => 122000
        ]);
        City::create([
            // city_id = 223
            'province_id' => 15,
            'name' => 'Kab. Kutai Barat',
            'shipping_cost' => 125000
        ]);
        City::create([
            // city_id = 224
            'province_id' => 15,
            'name' => 'Kab. Kutai Kartanegara',
            'shipping_cost' => 125000
        ]);
        City::create([
            // city_id = 225
            'province_id' => 15,
            'name' => 'Kab. Kutai Timur',
            'shipping_cost' => 142000
        ]);
        City::create([
            // city_id = 226
            'province_id' => 15,
            'name' => 'Kab. Pahakam Ulu',
            'shipping_cost' => 135000
        ]);
        City::create([
            // city_id = 227
            'province_id' => 15,
            'name' => 'Kab. Paser',
            'shipping_cost' => 133000
        ]);
        City::create([
            // city_id = 228
            'province_id' => 15,
            'name' => 'Kab. Penajam Paser Utara',
            'shipping_cost' => 122000
        ]);
        City::create([
            // city_id = 229
            'province_id' => 15,
            'name' => 'Kota Balikpapan',
            'shipping_cost' => 98000
        ]);
        City::create([
            // city_id = 230
            'province_id' => 15,
            'name' => 'Kota Bontang',
            'shipping_cost' => 107000
        ]);
        City::create([
            // city_id = 231
            'province_id' => 15,
            'name' => 'Kota Samarinda',
            'shipping_cost' => 100000
        ]);
        City::create([
            // city_id = 232
            'province_id' => 16,
            'name' => 'Kab. Bulungan',
            'shipping_cost' => 111000
        ]);
        City::create([
            // city_id = 233
            'province_id' => 16,
            'name' => 'Kab. Malunau',
            'shipping_cost' => 121000
        ]);
        City::create([
            // city_id = 234
            'province_id' => 16,
            'name' => 'Kab. Nunukan',
            'shipping_cost' => 121000
        ]);
        City::create([
            // city_id = 235
            'province_id' => 16,
            'name' => 'Kab. Tana Tidung',
            'shipping_cost' => 121000
        ]);
        City::create([
            // city_id = 236
            'province_id' => 16,
            'name' => 'Kota Tarakan',
            'shipping_cost' => 97000
        ]);
        City::create([
            // city_id = 237
            'province_id' => 17,
            'name' => 'Kab. Bintan',
            'shipping_cost' => 92000
        ]);
        City::create([
            // city_id = 238
            'province_id' => 17,
            'name' => 'Kab. Karimun',
            'shipping_cost' => 65000
        ]);
        City::create([
            // city_id = 239
            'province_id' => 17,
            'name' => 'Kab. Kepulauan Anambas',
            'shipping_cost' => 65000
        ]);
        City::create([
            // city_id = 240
            'province_id' => 17,
            'name' => 'Kab. Lingga',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 241
            'province_id' => 17,
            'name' => 'Kab. Natuna',
            'shipping_cost' => 65000
        ]);
        City::create([
            // city_id = 242
            'province_id' => 17,
            'name' => 'Kota Batam',
            'shipping_cost' => 47000
        ]);
        City::create([
            // city_id = 243
            'province_id' => 17,
            'name' => 'Kota Tanjung Pinang',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 244
            'province_id' => 18,
            'name' => 'Kab. Lampung Barat',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 245
            'province_id' => 18,
            'name' => 'Kab. Lampug Selatan',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 246
            'province_id' => 18,
            'name' => 'Kab. Lampug Tengah',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 247
            'province_id' => 18,
            'name' => 'Kab. Lampug Timur',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 248
            'province_id' => 18,
            'name' => 'Kab. Lampug Utara',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 249
            'province_id' => 18,
            'name' => 'Kab. Mesuji',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 250
            'province_id' => 18,
            'name' => 'Kab. Pesawaran',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 251
            'province_id' => 18,
            'name' => 'Kab. Pesisir Barat',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 252
            'province_id' => 18,
            'name' => 'Kab. Pringsewu',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 253
            'province_id' => 18,
            'name' => 'Kab. Tanggamus',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 254
            'province_id' => 18,
            'name' => 'Kab. Tulang Bawang',
            'shipping_cost' => 53000
        ]);
        City::create([
            // city_id = 255
            'province_id' => 18,
            'name' => 'Kab. Tulang Bawang Barat',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 256
            'province_id' => 18,
            'name' => 'Kab. Way Kanan',
            'shipping_cost' => 59000
        ]);
        City::create([
            // city_id = 257
            'province_id' => 18,
            'name' => 'Kota Bandar Lampung',
            'shipping_cost' => 47000
        ]);
        City::create([
            // city_id = 258
            'province_id' => 18,
            'name' => 'Kota Metro',
            'shipping_cost' => 53000
        ]);
        City::create([
            // city_id = 259
            'province_id' => 19,
            'name' => 'Kab. Buru',
            'shipping_cost' => 173000
        ]);
        City::create([
            // city_id = 260
            'province_id' => 19,
            'name' => 'Kab. Buru Selatan',
            'shipping_cost' => 173000
        ]);
        City::create([
            // city_id = 261
            'province_id' => 19,
            'name' => 'Kab. Kepulauan Aru',
            'shipping_cost' => 173000
        ]);
        City::create([
            // city_id = 262
            'province_id' => 19,
            'name' => 'Kab. Maluku Barat Daya',
            'shipping_cost' => 173000
        ]);
        City::create([
            // city_id = 263
            'province_id' => 19,
            'name' => 'Kab. Maluku Tengah',
            'shipping_cost' => 173000
        ]);
        City::create([
            // city_id = 264
            'province_id' => 19,
            'name' => 'Kab. Maluku Tenggara',
            'shipping_cost' => 173000
        ]);
        City::create([
            // city_id = 265
            'province_id' => 19,
            'name' => 'Kab. Maluku Tenggar Barat',
            'shipping_cost' => 173000
        ]);
        City::create([
            // city_id = 266
            'province_id' => 19,
            'name' => 'Kab. Seram Bagian Barat',
            'shipping_cost' => 173000
        ]);
        City::create([
            // city_id = 267
            'province_id' => 19,
            'name' => 'Kab. Seram Bagian Timur',
            'shipping_cost' => 173000
        ]);
        City::create([
            // city_id = 268
            'province_id' => 19,
            'name' => 'Kota Ambon',
            'shipping_cost' => 129000
        ]);
        City::create([
            // city_id = 269
            'province_id' => 19,
            'name' => 'Kota Tual',
            'shipping_cost' => 173000
        ]);
        City::create([
            // city_id = 270
            'province_id' => 20,
            'name' => 'Kab. Halmahera Barat',
            'shipping_cost' => 166000
        ]);
        City::create([
            // city_id = 271
            'province_id' => 20,
            'name' => 'Kab. Halmahera Selatan',
            'shipping_cost' => 124000
        ]);
        City::create([
            // city_id = 272
            'province_id' => 20,
            'name' => 'Kab. Halmahera Tengah',
            'shipping_cost' => 133000
        ]);
        City::create([
            // city_id = 273
            'province_id' => 20,
            'name' => 'Kab. Halmahera Timur',
            'shipping_cost' => 124000
        ]);
        City::create([
            // city_id = 274
            'province_id' => 20,
            'name' => 'Kab. Halmahera Utara',
            'shipping_cost' => 133000
        ]);
        City::create([
            // city_id = 275
            'province_id' => 20,
            'name' => 'Kab. Kepulauan Sula',
            'shipping_cost' => 133000
        ]);
        City::create([
            // city_id = 276
            'province_id' => 20,
            'name' => 'Kab. Pulau Morotai',
            'shipping_cost' => 166000
        ]);
        City::create([
            // city_id = 277
            'province_id' => 20,
            'name' => 'Kab. Pulau Talibau',
            'shipping_cost' => 166000
        ]);
        City::create([
            // city_id = 278
            'province_id' => 20,
            'name' => 'Kota Ternate',
            'shipping_cost' => 133000
        ]);
        City::create([
            // city_id = 279
            'province_id' => 20,
            'name' => 'Kota Tidore Kepulauan',
            'shipping_cost' => 166000
        ]);
        City::create([
            // city_id = 280
            'province_id' => 21,
            'name' => 'Kab. Bima',
            'shipping_cost' => 101000
        ]);
        City::create([
            // city_id = 281
            'province_id' => 21,
            'name' => 'Kab. Dompu',
            'shipping_cost' => 86000
        ]);
        City::create([
            // city_id = 282
            'province_id' => 21,
            'name' => 'Kab. Lombok Barat',
            'shipping_cost' => 86000
        ]);
        City::create([
            // city_id = 283
            'province_id' => 21,
            'name' => 'Kab. Lombok Tengah',
            'shipping_cost' => 86000
        ]);
        City::create([
            // city_id = 284
            'province_id' => 21,
            'name' => 'Kab. Lombok Timur',
            'shipping_cost' => 91000
        ]);
        City::create([
            // city_id = 285
            'province_id' => 21,
            'name' => 'Kab. Lombok Utara',
            'shipping_cost' => 101000
        ]);
        City::create([
            // city_id = 286
            'province_id' => 21,
            'name' => 'Kab. Sumbawa',
            'shipping_cost' => 91000
        ]);
        City::create([
            // city_id = 287
            'province_id' => 21,
            'name' => 'Kab. Sumbawa Barat',
            'shipping_cost' => 91000
        ]);
        City::create([
            // city_id = 288
            'province_id' => 21,
            'name' => 'Kota Bima',
            'shipping_cost' => 86000
        ]);
        City::create([
            // city_id = 289
            'province_id' => 21,
            'name' => 'Kota Mataram',
            'shipping_cost' => 81000
        ]);
        City::create([
            // city_id = 290
            'province_id' => 22,
            'name' => 'Kab. Alor',
            'shipping_cost' => 147000
        ]);
        City::create([
            // city_id = 291
            'province_id' => 22,
            'name' => 'Kab. Belu',
            'shipping_cost' => 137000
        ]);
        City::create([
            // city_id = 292
            'province_id' => 22,
            'name' => 'Kab. Ende',
            'shipping_cost' => 147000
        ]);
        City::create([
            // city_id = 293
            'province_id' => 22,
            'name' => 'Kab. Flores Timur',
            'shipping_cost' => 147000
        ]);
        City::create([
            // city_id = 294
            'province_id' => 22,
            'name' => 'Kab. Kupang',
            'shipping_cost' => 167000
        ]);
        City::create([
            // city_id = 295
            'province_id' => 22,
            'name' => 'Kab. Lembata',
            'shipping_cost' => 167000
        ]);
        City::create([
            // city_id = 296
            'province_id' => 22,
            'name' => 'Kab. Malaka',
            'shipping_cost' => 137000
        ]);
        City::create([
            // city_id = 297
            'province_id' => 22,
            'name' => 'Kab. Manggarai',
            'shipping_cost' => 167000
        ]);
        City::create([
            // city_id = 298
            'province_id' => 22,
            'name' => 'Kab. Manggarai Barat',
            'shipping_cost' => 137000
        ]);
        City::create([
            // city_id = 299
            'province_id' => 22,
            'name' => 'Kab. Manggarai Timur',
            'shipping_cost' => 137000
        ]);
        City::create([
            // city_id = 300
            'province_id' => 22,
            'name' => 'Kab. Nagekeo',
            'shipping_cost' => 137000
        ]);
        City::create([
            // city_id = 301
            'province_id' => 22,
            'name' => 'Kab. Ngada',
            'shipping_cost' => 147000
        ]);
        City::create([
            // city_id = 302
            'province_id' => 22,
            'name' => 'Kab. Rote Ndao',
            'shipping_cost' => 137000
        ]);
        City::create([
            // city_id = 303
            'province_id' => 22,
            'name' => 'Kab. Sabu Raijua',
            'shipping_cost' => 137000
        ]);
        City::create([
            // city_id = 304
            'province_id' => 22,
            'name' => 'Kab. Sikka',
            'shipping_cost' => 137000
        ]);
        City::create([
            // city_id = 305
            'province_id' => 22,
            'name' => 'Kab. Sumba Barat',
            'shipping_cost' => 137000
        ]);
        City::create([
            // city_id = 306
            'province_id' => 22,
            'name' => 'Kab. Sumba Barat Daya',
            'shipping_cost' => 167000
        ]);
        City::create([
            // city_id = 307
            'province_id' => 22,
            'name' => 'Kab. Sumba Tengah',
            'shipping_cost' => 137000
        ]);
        City::create([
            // city_id = 308
            'province_id' => 22,
            'name' => 'Kab. Sumba Timur',
            'shipping_cost' => 167000
        ]);
        City::create([
            // city_id = 309
            'province_id' => 22,
            'name' => 'Kab. Timor Tengah Selatan',
            'shipping_cost' => 147000
        ]);
        City::create([
            // city_id = 310
            'province_id' => 22,
            'name' => 'Kab. Timor Tengah Utara',
            'shipping_cost' => 167000
        ]);
        City::create([
            // city_id = 311
            'province_id' => 22,
            'name' => 'Kota Kupang',
            'shipping_cost' => 127000
        ]);
        City::create([
            // city_id = 312
            'province_id' => 23,
            'name' => 'Kab. Asmat',
            'shipping_cost' => 277000
        ]);
        City::create([
            // city_id = 313
            'province_id' => 23,
            'name' => 'Kab. Biak Numfor',
            'shipping_cost' => 234000
        ]);
        City::create([
            // city_id = 314
            'province_id' => 23,
            'name' => 'Kab. Boven Digoel',
            'shipping_cost' => 266000
        ]);
        City::create([
            // city_id = 315
            'province_id' => 23,
            'name' => 'Kab. Deiyai',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 316
            'province_id' => 23,
            'name' => 'Kab. Dogiyai',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 317
            'province_id' => 23,
            'name' => 'Kab. Intan Jaya',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 318
            'province_id' => 23,
            'name' => 'Kab. Jayapura',
            'shipping_cost' => 234000
        ]);
        City::create([
            // city_id = 319
            'province_id' => 23,
            'name' => 'Kab. Jayawijaya',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 320
            'province_id' => 23,
            'name' => 'Kab. Keerom',
            'shipping_cost' => 234000
        ]);
        City::create([
            // city_id = 321
            'province_id' => 23,
            'name' => 'Kab. Kepulauan Yapen',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 322
            'province_id' => 23,
            'name' => 'Kab. Lanny Jaya',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 323
            'province_id' => 23,
            'name' => 'Kab. Mamberamo Raya',
            'shipping_cost' => 266000
        ]);
        City::create([
            // city_id = 324
            'province_id' => 23,
            'name' => 'Kab. Mamberamo Tengah',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 325
            'province_id' => 23,
            'name' => 'Kab. Mappi',
            'shipping_cost' => 277000
        ]);
        City::create([
            // city_id = 326
            'province_id' => 23,
            'name' => 'Kab. Marauke',
            'shipping_cost' => 266000
        ]);
        City::create([
            // city_id = 327
            'province_id' => 23,
            'name' => 'Kab. Mimika',
            'shipping_cost' => 300000
        ]);
        City::create([
            // city_id = 328
            'province_id' => 23,
            'name' => 'Kab. Nabire',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 329
            'province_id' => 23,
            'name' => 'Kab. Nduga',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 330
            'province_id' => 23,
            'name' => 'Kab. Paniai',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 331
            'province_id' => 23,
            'name' => 'Kab. Pegunungan Bintang',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 332
            'province_id' => 23,
            'name' => 'Kab. Puncak',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 333
            'province_id' => 23,
            'name' => 'Kab. Puncak Jaya',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 334
            'province_id' => 23,
            'name' => 'Kab. Sarmi',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 335
            'province_id' => 23,
            'name' => 'Kab. Supiori',
            'shipping_cost' => 234000
        ]);
        City::create([
            // city_id = 336
            'province_id' => 23,
            'name' => 'Kab. Tolikara',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 337
            'province_id' => 23,
            'name' => 'Kab. Waropen',
            'shipping_cost' => 266000
        ]);
        City::create([
            // city_id = 338
            'province_id' => 23,
            'name' => 'Kab. Yahukimo',
            'shipping_cost' => 266000
        ]);
        City::create([
            // city_id = 339
            'province_id' => 23,
            'name' => 'Kab. Yalimo',
            'shipping_cost' => 254000
        ]);
        City::create([
            // city_id = 340
            'province_id' => 23,
            'name' => 'Kota Jayapura',
            'shipping_cost' => 216000
        ]);
        City::create([
            // city_id = 341
            'province_id' => 24,
            'name' => 'Kab. Fakfak',
            'shipping_cost' => 216000
        ]);
        City::create([
            // city_id = 342
            'province_id' => 24,
            'name' => 'Kab. Kaimana',
            'shipping_cost' => 293000
        ]);
        City::create([
            // city_id = 343
            'province_id' => 24,
            'name' => 'Kab. Manokwari',
            'shipping_cost' => 272000
        ]);
        City::create([
            // city_id = 344
            'province_id' => 24,
            'name' => 'Kab. Manokwari Selatan',
            'shipping_cost' => 293000
        ]);
        City::create([
            // city_id = 345
            'province_id' => 24,
            'name' => 'Kab. Maybrat',
            'shipping_cost' => 293000
        ]);
        City::create([
            // city_id = 346
            'province_id' => 24,
            'name' => 'Kab. Pegunungan Arfak',
            'shipping_cost' => 293000
        ]);
        City::create([
            // city_id = 347
            'province_id' => 24,
            'name' => 'Kab. Raja Ampat',
            'shipping_cost' => 293000
        ]);
        City::create([
            // city_id = 348
            'province_id' => 24,
            'name' => 'Kab. Sorong',
            'shipping_cost' => 293000
        ]);
        City::create([
            // city_id = 349
            'province_id' => 24,
            'name' => 'Kab. Sorong Selatan',
            'shipping_cost' => 293000
        ]);
        City::create([
            // city_id = 350
            'province_id' => 24,
            'name' => 'Kab. Tambrauw',
            'shipping_cost' => 293000
        ]);
        City::create([
            // city_id = 351
            'province_id' => 24,
            'name' => 'Kab. Teluk Bintuni',
            'shipping_cost' => 293000
        ]);
        City::create([
            // city_id = 352
            'province_id' => 24,
            'name' => 'Kab. Teluk Wondama',
            'shipping_cost' => 293000
        ]);
        City::create([
            // city_id = 353
            'province_id' => 24,
            'name' => 'Kota Sorong',
            'shipping_cost' => 252000
        ]);
        City::create([
            // city_id = 354
            'province_id' => 25,
            'name' => 'Kab. Bengkalis',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 355
            'province_id' => 25,
            'name' => 'Kab. Indragiri Hilir',
            'shipping_cost' => 50000
        ]);
        City::create([
            // city_id = 356
            'province_id' => 25,
            'name' => 'Kab. Indragiri Hulu',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 357
            'province_id' => 25,
            'name' => 'Kab. Kampar',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 358
            'province_id' => 25,
            'name' => 'Kab. Kepulauan Meranti',
            'shipping_cost' => 38000
        ]);
        City::create([
            // city_id = 359
            'province_id' => 25,
            'name' => 'Kab. Kuatan Singingi',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 360
            'province_id' => 25,
            'name' => 'Kab. Pelalawan',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 361
            'province_id' => 25,
            'name' => 'Kab. Rokan Hilir',
            'shipping_cost' => 38000
        ]);
        City::create([
            // city_id = 362
            'province_id' => 25,
            'name' => 'Kab. Rokan Hulu',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 363
            'province_id' => 25,
            'name' => 'Kab. Siak',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 364
            'province_id' => 25,
            'name' => 'Kab. Dumai',
            'shipping_cost' => 44000
        ]);
        City::create([
            // city_id = 365
            'province_id' => 25,
            'name' => 'Kota Pekanbaru',
            'shipping_cost' => 32000
        ]);
        City::create([
            // city_id = 366
            'province_id' => 26,
            'name' => 'Kab. Majene',
            'shipping_cost' => 100000
        ]);
        City::create([
            // city_id = 367
            'province_id' => 26,
            'name' => 'Kab. Mamasa',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 368
            'province_id' => 26,
            'name' => 'Kab. Mamuju',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 369
            'province_id' => 26,
            'name' => 'Kab. Mamuju Tengah',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 370
            'province_id' => 26,
            'name' => 'Kab. Mamuju Utara',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 371
            'province_id' => 26,
            'name' => 'Kab. Polewali Mandar',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 372
            'province_id' => 27,
            'name' => 'Kab. Bantaeng',
            'shipping_cost' => 100000
        ]);
        City::create([
            // city_id = 373
            'province_id' => 27,
            'name' => 'Kab. Barru',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 374
            'province_id' => 27,
            'name' => 'Kab. Bone',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 375
            'province_id' => 27,
            'name' => 'Kab. Bulukumba',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 376
            'province_id' => 27,
            'name' => 'Kab. Enrekang',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 377
            'province_id' => 27,
            'name' => 'Kab. Gowa',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 378
            'province_id' => 27,
            'name' => 'Kab. Jeneponto',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 379
            'province_id' => 27,
            'name' => 'Kab. Kepulauan Selayar',
            'shipping_cost' => 100000
        ]);
        City::create([
            // city_id = 380
            'province_id' => 27,
            'name' => 'Kab. Luwu',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 381
            'province_id' => 27,
            'name' => 'Kab. Luwu Timur',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 382
            'province_id' => 27,
            'name' => 'Kab. Luwu Utara',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 383
            'province_id' => 27,
            'name' => 'Kab. Maros',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 384
            'province_id' => 27,
            'name' => 'Kab. Pangkajene Kepulauan',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 385
            'province_id' => 27,
            'name' => 'Kab. Pinrang',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 386
            'province_id' => 27,
            'name' => 'Kab. Sidenrang Rappang',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 387
            'province_id' => 27,
            'name' => 'Kab. Sinjai',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 388
            'province_id' => 27,
            'name' => 'Kab. Soppeng',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 389
            'province_id' => 27,
            'name' => 'Kab. Takalar',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 390
            'province_id' => 27,
            'name' => 'Kab. Tana Toraja',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 391
            'province_id' => 27,
            'name' => 'Kab. Toraja Utara',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 392
            'province_id' => 27,
            'name' => 'Kab. Wajo',
            'shipping_cost' => 106000
        ]);
        City::create([
            // city_id = 393
            'province_id' => 27,
            'name' => 'Kota Makassar',
            'shipping_cost' => 94000
        ]);
        City::create([
            // city_id = 394
            'province_id' => 27,
            'name' => 'Kota Palopo',
            'shipping_cost' => 100000
        ]);
        City::create([
            // city_id = 395
            'province_id' => 27,
            'name' => 'Kota Pare-Pare',
            'shipping_cost' => 100000
        ]);
        City::create([
            // city_id = 396
            'province_id' => 28,
            'name' => 'Kab. Banggai',
            'shipping_cost' => 153000
        ]);
        City::create([
            // city_id = 397
            'province_id' => 28,
            'name' => 'Kab. Banggai Kepulauan',
            'shipping_cost' => 153000
        ]);
        City::create([
            // city_id = 398
            'province_id' => 28,
            'name' => 'Kab. Banggai Laut',
            'shipping_cost' => 136000
        ]);
        City::create([
            // city_id = 399
            'province_id' => 28,
            'name' => 'Kab. Buol',
            'shipping_cost' => 153000
        ]);
        City::create([
            // city_id = 400
            'province_id' => 28,
            'name' => 'Kab. Donggala',
            'shipping_cost' => 153000
        ]);
        City::create([
            // city_id = 401
            'province_id' => 28,
            'name' => 'Kab. Morowali',
            'shipping_cost' => 153000
        ]);
        City::create([
            // city_id = 402
            'province_id' => 28,
            'name' => 'Kab. Morowali Utara',
            'shipping_cost' => 153000
        ]);
        City::create([
            // city_id = 403
            'province_id' => 28,
            'name' => 'Kab. Parigi Moutong',
            'shipping_cost' => 153000
        ]);
        City::create([
            // city_id = 404
            'province_id' => 28,
            'name' => 'Kab. Poso',
            'shipping_cost' => 153000
        ]);
        City::create([
            // city_id = 405
            'province_id' => 28,
            'name' => 'Kab. Sigi',
            'shipping_cost' => 136000
        ]);
        City::create([
            // city_id = 406
            'province_id' => 28,
            'name' => 'Kab. Tojo Una-Una',
            'shipping_cost' => 136000
        ]);
        City::create([
            // city_id = 407
            'province_id' => 28,
            'name' => 'Kab. Toli-Toli',
            'shipping_cost' => 153000
        ]);
        City::create([
            // city_id = 408
            'province_id' => 28,
            'name' => 'Kota Palu',
            'shipping_cost' => 117000
        ]);
        City::create([
            // city_id = 409
            'province_id' => 29,
            'name' => 'Kab. Bombana',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 410
            'province_id' => 29,
            'name' => 'Kab. Buton',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 411
            'province_id' => 29,
            'name' => 'Kab. Buton Selatan',
            'shipping_cost' => 148000
        ]);
        City::create([
            // city_id = 412
            'province_id' => 29,
            'name' => 'Kab. Buton Tengah',
            'shipping_cost' => 148000
        ]);
        City::create([
            // city_id = 413
            'province_id' => 29,
            'name' => 'Kab. Buton Utara',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 414
            'province_id' => 29,
            'name' => 'Kab. Kolaka',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 415
            'province_id' => 29,
            'name' => 'Kab. Kolaka Timur',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 416
            'province_id' => 29,
            'name' => 'Kab. Kolaka Utara',
            'shipping_cost' => 148000
        ]);
        City::create([
            // city_id = 417
            'province_id' => 29,
            'name' => 'Kab. Konawe',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 418
            'province_id' => 29,
            'name' => 'Kab. Konawe Kepulauan',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 419
            'province_id' => 29,
            'name' => 'Kab. Konawe Selatan',
            'shipping_cost' => 127000
        ]);
        City::create([
            // city_id = 420
            'province_id' => 29,
            'name' => 'Kab. Konawe Utara',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 421
            'province_id' => 29,
            'name' => 'Kab. Muna',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 422
            'province_id' => 29,
            'name' => 'Kab. Muna Barat',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 423
            'province_id' => 29,
            'name' => 'Kab. Wakatobi',
            'shipping_cost' => 148000
        ]);
        City::create([
            // city_id = 424
            'province_id' => 29,
            'name' => 'Kota Bau Bau',
            'shipping_cost' => 138000
        ]);
        City::create([
            // city_id = 425
            'province_id' => 29,
            'name' => 'Kota Kendari',
            'shipping_cost' => 117000
        ]);
        City::create([
            // city_id = 426
            'province_id' => 30,
            'name' => 'Kab. Bolaang Mongondow',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 427
            'province_id' => 30,
            'name' => 'Kab. Bolaang Mongondow Selatan',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 428
            'province_id' => 30,
            'name' => 'Kab. Bolaang Mongondow Timur',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 429
            'province_id' => 30,
            'name' => 'Kab. Bolaang Mongondow Utara',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 430
            'province_id' => 30,
            'name' => 'Kab. Kepulauan Sangihe',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 431
            'province_id' => 30,
            'name' => 'Kab. Kepulauan Siau Tagulandang Biaro',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 432
            'province_id' => 30,
            'name' => 'Kab. Kepulauan Talaud',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 433
            'province_id' => 30,
            'name' => 'Kab. Minahasa',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 434
            'province_id' => 30,
            'name' => 'Kab. Minahasa Selatan',
            'shipping_cost' => 133000
        ]);
        City::create([
            // city_id = 435
            'province_id' => 30,
            'name' => 'Kab. Minahasa Tenggara',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 436
            'province_id' => 30,
            'name' => 'Kab. Minahasa Utara',
            'shipping_cost' => 133000
        ]);
        City::create([
            // city_id = 437
            'province_id' => 30,
            'name' => 'Kota Bitung',
            'shipping_cost' => 133000
        ]);
        City::create([
            // city_id = 438
            'province_id' => 30,
            'name' => 'Kota Kotamobagu',
            'shipping_cost' => 133000
        ]);
        City::create([
            // city_id = 439
            'province_id' => 30,
            'name' => 'Kota Manado',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 440
            'province_id' => 30,
            'name' => 'Kota Tomohon',
            'shipping_cost' => 143000
        ]);
        City::create([
            // city_id = 441
            'province_id' => 31,
            'name' => 'Kab. Agam',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 442
            'province_id' => 31,
            'name' => 'Kab. Dharmasraya',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 443
            'province_id' => 31,
            'name' => 'Kab. Kepulauan Mentawai',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 444
            'province_id' => 31,
            'name' => 'Kab. Lima Puluh Kota',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 445
            'province_id' => 31,
            'name' => 'Kab. Padang Pariaman',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 446
            'province_id' => 31,
            'name' => 'Kab. Pasaman',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 447
            'province_id' => 31,
            'name' => 'Kab. Pasaman Barat',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 448
            'province_id' => 31,
            'name' => 'Kab. Pesisir Selatan',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 449
            'province_id' => 31,
            'name' => 'Kab. Sijunjung',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 450
            'province_id' => 31,
            'name' => 'Kab. Solok',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 451
            'province_id' => 31,
            'name' => 'Kab. Solok Selatan',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 452
            'province_id' => 31,
            'name' => 'Kab. Tanah Datar',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 453
            'province_id' => 31,
            'name' => 'Kota Bukit Tinggi',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 454
            'province_id' => 31,
            'name' => 'Kota Padang',
            'shipping_cost' => 33000
        ]);
        City::create([
            // city_id = 455
            'province_id' => 31,
            'name' => 'Kota Padang Panjang',
            'shipping_cost' => 45000
        ]);
        City::create([
            // city_id = 456
            'province_id' => 31,
            'name' => 'Kota Pariaman',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 457
            'province_id' => 31,
            'name' => 'Kota Payakumbuh',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 458
            'province_id' => 31,
            'name' => 'Kota Sawahlunto',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 459
            'province_id' => 31,
            'name' => 'Kota Solok',
            'shipping_cost' => 39000
        ]);
        City::create([
            // city_id = 460
            'province_id' => 32,
            'name' => 'Kab. Banyuasin',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 461
            'province_id' => 32,
            'name' => 'Kab. Empat Lawang',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 462
            'province_id' => 32,
            'name' => 'Kab. Lahat',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 463
            'province_id' => 32,
            'name' => 'Kab. Muara Enim',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 464
            'province_id' => 32,
            'name' => 'Kab. Musi Banyuasin',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 465
            'province_id' => 32,
            'name' => 'Kab. Musi Rawas',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 466
            'province_id' => 32,
            'name' => 'Kab. Musi Rawas Utara',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 467
            'province_id' => 32,
            'name' => 'Kab. Ogan Ilir',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 468
            'province_id' => 32,
            'name' => 'Kab. Ogan Komering Ilir',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 469
            'province_id' => 32,
            'name' => 'Kab. Ogan Komering Ulu',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 470
            'province_id' => 32,
            'name' => 'Kab. Ogan Komering Ulu Selatan',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 471
            'province_id' => 32,
            'name' => 'Kab. Ogan Komering Ulu Timur',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 472
            'province_id' => 32,
            'name' => 'Kab. Penukal Abab Lematang Ilir',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 473
            'province_id' => 32,
            'name' => 'Kota Lubuk Linggau',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 474
            'province_id' => 32,
            'name' => 'Kota Pagar Alam',
            'shipping_cost' => 79000
        ]);
        City::create([
            // city_id = 475
            'province_id' => 32,
            'name' => 'Kota Palembang',
            'shipping_cost' => 52000
        ]);
        City::create([
            // city_id = 476
            'province_id' => 32,
            'name' => 'Kota Prabumulih',
            'shipping_cost' => 72000
        ]);
        City::create([
            // city_id = 477
            'province_id' => 33,
            'name' => 'Kab. Asahan',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 478
            'province_id' => 33,
            'name' => 'Kab. Batubara',
            'shipping_cost' => 15000
        ]);
        City::create([
            // city_id = 479
            'province_id' => 33,
            'name' => 'Kab. Dairi',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 480
            'province_id' => 33,
            'name' => 'Kab. Deli Serdang',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 481
            'province_id' => 33,
            'name' => 'Kab. Humbang Hasundutan',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 482
            'province_id' => 33,
            'name' => 'Kab. Karo',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 483
            'province_id' => 33,
            'name' => 'Kab. Labuhan Batu',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 484
            'province_id' => 33,
            'name' => 'Kab. Labuhan Batu Selatan',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 485
            'province_id' => 33,
            'name' => 'Kab. Labuhan Batu Utara',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 486
            'province_id' => 33,
            'name' => 'Kab. Langkat',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 487
            'province_id' => 33,
            'name' => 'Kab. Mandaling Natal',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 488
            'province_id' => 33,
            'name' => 'Kab. Nias',
            'shipping_cost' => 25000
        ]);
        City::create([
            // city_id = 489
            'province_id' => 33,
            'name' => 'Kab. Nias Barat',
            'shipping_cost' => 25000
        ]);
        City::create([
            // city_id = 490
            'province_id' => 33,
            'name' => 'Kab. Nias Selatan',
            'shipping_cost' => 25000
        ]);
        City::create([
            // city_id = 491
            'province_id' => 33,
            'name' => 'Kab. Nias Utara',
            'shipping_cost' => 25000
        ]);
        City::create([
            // city_id = 492
            'province_id' => 33,
            'name' => 'Kab. Padang Lawas',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 493
            'province_id' => 33,
            'name' => 'Kab. Padang Lawas Utara',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 494
            'province_id' => 33,
            'name' => 'Kab. Pakpak Barat',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 495
            'province_id' => 33,
            'name' => 'Kab. Samosir',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 496
            'province_id' => 33,
            'name' => 'Kab. Serdang Bedagai',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 497
            'province_id' => 33,
            'name' => 'Kab. Simalungun',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 498
            'province_id' => 33,
            'name' => 'Kab. Tapanuli Selatan',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 499
            'province_id' => 33,
            'name' => 'Kab. Tapanuli Tengah',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 500
            'province_id' => 33,
            'name' => 'Kab. Tapanuli Utara',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 501
            'province_id' => 33,
            'name' => 'Kab. Toba Samosir',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 502
            'province_id' => 33,
            'name' => 'Kota Binjai',
            'shipping_cost' => 15000
        ]);
        City::create([
            // city_id = 503
            'province_id' => 33,
            'name' => 'Kota Gunungsitoli',
            'shipping_cost' => 20000
        ]);
        City::create([
            // city_id = 504
            'province_id' => 33,
            'name' => 'Kota Medan',
            'shipping_cost' => 10000
        ]);
        City::create([
            // city_id = 505
            'province_id' => 33,
            'name' => 'Kota Padang Sidempuan',
            'shipping_cost' => 15000
        ]);
        City::create([
            // city_id = 506
            'province_id' => 33,
            'name' => 'Kota Pematangsiantar',
            'shipping_cost' => 15000
        ]);
        City::create([
            // city_id = 507
            'province_id' => 33,
            'name' => 'Kota Sibolga',
            'shipping_cost' => 15000
        ]);
        City::create([
            // city_id = 508
            'province_id' => 33,
            'name' => 'Kota Tanjung Balai',
            'shipping_cost' => 15000
        ]);
        City::create([
            // city_id = 509
            'province_id' => 33,
            'name' => 'Kota Tebing Tinggi',
            'shipping_cost' => 15000
        ]);
        City::create([
            // city_id = 510
            'province_id' => 34,
            'name' => 'Kab. Bantul',
            'shipping_cost' => 61000
        ]);
        City::create([
            // city_id = 511
            'province_id' => 34,
            'name' => 'Kab. Gunung Kidul',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 512
            'province_id' => 34,
            'name' => 'Kab. Kulon Progo',
            'shipping_cost' => 64000
        ]);
        City::create([
            // city_id = 513
            'province_id' => 34,
            'name' => 'Kab. Sleman',
            'shipping_cost' => 61000
        ]);
        City::create([
            // city_id = 514
            'province_id' => 34,
            'name' => 'Kota Yogyakarta',
            'shipping_cost' => 58000
        ]);
    }
}
