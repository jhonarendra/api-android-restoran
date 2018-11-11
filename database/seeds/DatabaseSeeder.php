<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_pelanggan')->insert([
        	'nama_pelanggan' => 'Putu Jhonarendra',
        	'email_pelanggan' => 'jhonarendra@gmail.com',
        	'username_pelanggan' => 'jhonarendra',
        	'password_pelanggan' => md5('jonajona'),
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_pegawai')->insert([
            'nama_pegawai' => 'Anak Agung Gede Agung',
            'email_pegawai' => 'gungdegung@gmail.com',
            'username_pegawai' => 'gungdegung',
            'password_pegawai' => md5('gungdegung'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Cheese Burger',
            'deskripsi_hidangan' => 'Burger dengan keju yang menggugah selera',
            'kategori_hidangan' => 'Burger',
            'harga_hidangan' => 'Rp 31.818',
            'foto_hidangan' => 'burger_cheese_burger.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Double Cheese Burger',
            'deskripsi_hidangan' => 'Burger dengan keju extra lebih mantap',
            'kategori_hidangan' => 'Burger',
            'harga_hidangan' => 'Rp 42.727',
            'foto_hidangan' => 'burger_double_cheese_burger.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Coca Cola',
            'deskripsi_hidangan' => 'Coca cola minuman soda yang segar',
            'kategori_hidangan' => 'Minuman',
            'harga_hidangan' => 'Rp 7.727',
            'foto_hidangan' => 'minuman_coca_cola.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Sprite',
            'deskripsi_hidangan' => 'Sprite minuman soda yang segar',
            'kategori_hidangan' => 'Minuman',
            'harga_hidangan' => 'Rp 7.727',
            'foto_hidangan' => 'minuman_sprite.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Es Krim',
            'deskripsi_hidangan' => 'Es krim cone segala rasa',
            'kategori_hidangan' => 'Dessert',
            'harga_hidangan' => 'Rp 4.545',
            'foto_hidangan' => 'dessert_es_krim.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_komentar')->insert([
            'id_pelanggan' => '1',
            'isi_komentar' => 'Aplikasinya bagus mudah digunakan. Saya jadi tahu semua menu yang ada di restoran',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
