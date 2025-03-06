<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Obats;
use App\Models\Reseps;
use App\Models\Konsuls;


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
            'name' => "Rizky Ariansya",
            'email' => "ari281@gmail.com",
            'status_login' => "Admin Kelinik",
            'password' => bcrypt("ari281"),
            'alamat' => 'jln.seruni I, lrg.Amana',
            'telepon' => '081242767616',
        ]);    
    
        User::create([
            'name' => 'Encuy',            
            'email' => "encuy21@gmail.com",
            'status_login' => "Pasien",
            'password' => bcrypt("encuy21"),
            'alamat' => 'jln.seruni II, lrg.Alir',
            'telepon' => '089440076116',
	    ]);

	    User::create([
            'name' => 'Rani Aprilia',
            'email' => "rani212@gmail.com",
            'status_login' => "Pasien",
            'password' => bcrypt("rani212"),
            'alamat' => 'jln.Asam I, lrg.mahmmud',
            'telepon' => '081242768433',
	    ]);

	    User::create([
            'name' => 'Reno Renaldi',
            'email' => "reno22@gmail.com",
            'status_login' => "Pasien",
            'password' => bcrypt("reno22"),
            'alamat' => 'jln.Hasanan, lrg.Arjuna',
            'telepon' => '081242777367',
	    ]);

	    User::create([
            'name' => 'Amaral Ardila',
            'email' => "dila21@gmail.com",
            'status_login' => "Pasien",
            'password' => bcrypt("dila21"),
            'alamat' => 'jln.Armada I, lrg.Hasan Udin',
            'telepon' => '081242766643',
	    ]);

	    Obats::create([
            'nama_obat' => 'Fikang sunag',
            'stok' => '120',
            'harga' => '15000',
            'keterangan_obat' => 'Obat gatel dan salep poles',
	    ]);

	    Obats::create([
            'nama_obat' => 'Amoksilin',
            'stok' => '50',
            'harga' => '8000',
            'keterangan_obat' => 'Obat cuci darah, dijual tablet, satu tablet isi 10 obat'
        ]);

	    Obats::create([
            'nama_obat' => 'Kapsida',
            'stok' => '30',
            'harga' => '6000',
            'keterangan_obat' => 'Obat cuci darah, dijual tablet, satu tablet isi 10 obat'
        ]);

	    Obats::create([
            'nama_obat' => 'Metromen HCI',
            'stok' => '50',
            'harga' => '5000',
            'keterangan_obat' => 'Harga obat pertamblet, satu tamlet isi 10 obat'
        ]);

	    Konsuls::create([
            'pasien_id' => '3',
            'nomor_antrian' => '1',
            'keterangan_konsul' => 'Gejala darah tinggi',
            'saran' => 'kurangai makanan yang berminyak dan yang asin-asin',
            'informasi' => 'Obat gratis dari kartu BPJS',
        ]);

	    Konsuls::create([
            'pasien_id' => '4',
            'nomor_antrian' => '2',
            'keterangan_konsul' => 'Gejala galigato',
            'saran' => 'jangan makan udang',
            'informasi' => 'Obat gratis dari kartu BPJS',
	    ]);

        Reseps::create([
	    	'obat_id' => '1',
            'konsul_id' => '1',
            'keterangan_resep' => 'Obat diminum 3 X 1 Perhari'
	    ]);

	    Reseps::create([
	    	'obat_id' => '1',
            'konsul_id' => '1',
            'keterangan_resep' => 'Obat diminum 1 X 1 Perhari, bagusnya diminum sebelum tidur'
	    ]);

	    Reseps::create([
	    	'obat_id' => '4',
            'konsul_id' => '2',
            'keterangan_resep' => 'Obat dioleskan 2 X 1 Perhari, bagusnya dipoleskan ketika ingin beraktifikas dan sebelum tidur'
	    ]);

	    Reseps::create([
	    	'obat_id' => '4',
            'konsul_id' => '2',
            'keterangan_resep' => 'Obat diminum 3 X 1 Perhari'
	    ]);

    
    }
}
