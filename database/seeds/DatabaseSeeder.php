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
        // Pelanggan
        DB::table('tb_pelanggan')->insert([
        	'nama_pelanggan' => 'Putu Jhonarendra',
        	'email_pelanggan' => 'jhonarendra@gmail.com',
        	'username_pelanggan' => 'jhonarendra',
        	'password_pelanggan' => md5('jonajona'),
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s")
        ]);

        // Pegawai
        DB::table('tb_pegawai')->insert([
            'nama_pegawai' => 'Anak Agung Gede Agung',
            'email_pegawai' => 'gungdegung@gmail.com',
            'username_pegawai' => 'gungdegung',
            'password_pegawai' => md5('gungdegung'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // Hidangan
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Cheese Burger',
            'deskripsi_hidangan' => 'Beri ruang untuk Burger Cheeseburger ganda kami, dua roti daging bakar bakar yang dibumbui dengan lapisan sederhana keju Amerika yang meleleh, acar belok keriting, mustard kuning, dan saus tomat pada roti biji wijen panggang.',
            'kategori_hidangan' => 'Burger',
            'harga_hidangan' => 'Rp 31.818',
            'foto_hidangan' => 'burger_cheese_burger.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Chicken Garden Salad',
            'deskripsi_hidangan' => 'Chicken Garden Salad kami adalah campuran romain hijau renyah, daun hijau dan selada radicchio, tomat matang, bawang putih, dan keju cheddar parut.',
            'kategori_hidangan' => 'Salad',
            'harga_hidangan' => 'Rp 18.181',
            'foto_hidangan' => 'salad_ChickenGardenSalad.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Coca Cola',
            'deskripsi_hidangan' => '© The Coca-Cola Company. "Coke" adalah merek dagang terdaftar dari The Coca-Cola Company.',
            'kategori_hidangan' => 'Minuman',
            'harga_hidangan' => 'Rp 7.727',
            'foto_hidangan' => 'minuman_coca_cola.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Es Krim',
            'deskripsi_hidangan' => 'Kami tidak menciptakan servis yang lembut, tetapi dengan satu rasa es krim kami yang dingin, lembut, dan lembut, Anda akan berpikir kami menyempurnakannya. Pilihan kon atau gelas',
            'kategori_hidangan' => 'Dessert',
            'harga_hidangan' => 'Rp 4.545',
            'foto_hidangan' => 'dessert_es_krim.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Sourdough King',
            'deskripsi_hidangan' => 'Memperkenalkan Sarapan Bacon Ganda Asap SOURDOUGH KING ™ dibuat dengan menggandakan porsi potongan tebal daging asap alami, dua porsi keju Amerika yang dilelehkan dan ditumpuk tinggi dengan dua telur lembut; semua di roti penghuni pertama kami',
            'kategori_hidangan' => 'Breakfast',
            'harga_hidangan' => 'Rp 23.636',
            'foto_hidangan' => 'breakfast_SourdoughKing.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Double Cheese Burger',
            'deskripsi_hidangan' => 'Burger yang menyajikan dua roti bakar daging sapi bakar yang lezat dengan total lebih dari 1/2 lb * daging sapi, dilapisi dengan keju Amerika yang diiris meleleh, bawang karamel dan saus keju Amerika yang diracik pada roti biji wijen panggang kami.',
            'kategori_hidangan' => 'Burger',
            'harga_hidangan' => 'Rp 42.727',
            'foto_hidangan' => 'burger_double_cheese_burger.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Sprite',
            'deskripsi_hidangan' => '© The Coca-Cola Company. "Sprite" adalah merek dagang terdaftar dari The Coca-Cola Company.',
            'kategori_hidangan' => 'Minuman',
            'harga_hidangan' => 'Rp 7.727',
            'foto_hidangan' => 'minuman_sprite.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Hamburger',
            'deskripsi_hidangan' => 'Coba Hamburger kami, tanda tangan yang dibakar api. beef patty dengan lapisan sederhana acar yang dipotong keriting, mustar kuning, dan saus tomat pada roti biji wijen panggang.',
            'kategori_hidangan' => 'Burger',
            'harga_hidangan' => 'Rp 25.454',
            'foto_hidangan' => 'burger_hamburger.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'WHOPPER',
            'deskripsi_hidangan' => 'Sandwich WHOPPER® kami adalah ¼ lb * daging sapi bakar-bakar yang gurih dengan tomat juicy, selada segar, krim mayones, saus tomat, acar renyah, dan irisan bawang putih pada roti biji wijen yang lembut.',
            'kategori_hidangan' => 'Burger',
            'harga_hidangan' => 'Rp 39.090',
            'foto_hidangan' => 'burger_WHOPPER.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Bacon Burger',
            'deskripsi_hidangan' => 'BBQ Bacon Burger Sandwich kami memiliki ¼ lb * daging panggang bakar yang gurih, dengan topping daging asap tebal, keju Amerika yang meleleh, irisan selada segar, mayo krim, tomat matang, saus tomat, bawang, acar renyah, dan lapisan saus bbq manis dan berasap, semua pada roti biji wijen yang hangat, panggang, wijen.',
            'kategori_hidangan' => 'Burger',
            'harga_hidangan' => 'Rp 46.363',
            'foto_hidangan' => 'burger_bacon.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Air Putih',
            'deskripsi_hidangan' => 'Nestlé® Pure Life® Purified Water, air kemasan eksklusif, adalah cara yang keren dan menyegarkan untuk mencuci favorit tanda tangan Anda.',
            'kategori_hidangan' => 'Minuman',
            'harga_hidangan' => 'Rp 7.272',
            'foto_hidangan' => 'minuman_air_putih.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Frozen Coke',
            'deskripsi_hidangan' => '© The Coca-Cola Company. "Frozen Coke" adalah Coca-Cola beku.',
            'kategori_hidangan' => 'Minuman',
            'harga_hidangan' => 'Rp 10.909',
            'foto_hidangan' => 'minuman_frozen_coke.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Chocolate Sundae',
            'deskripsi_hidangan' => 'Keren dan lembut dengan coklat fudge swirl, kami membuat HERSHEY\'S Chocolate Fudge Sundae dilengkapi dengan Soft Vanve beludru kami.',
            'kategori_hidangan' => 'Dessert',
            'harga_hidangan' => 'Rp 11.818',
            'foto_hidangan' => 'dessert_coklat_sundae.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Cookies',
            'deskripsi_hidangan' => 'Kue yang lezat dari OTIS SPUNKMEYER® Chocolate Chip kami sarat dengan chip cokelat yang meleleh dan dipanggang setiap hari untuk kesempurnaan.',
            'kategori_hidangan' => 'Dessert',
            'harga_hidangan' => 'Rp 10.909',
            'foto_hidangan' => 'dessert_cookies.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Oreo Cheese Cake',
            'deskripsi_hidangan' => 'OREO® Cookie Cheesecake kami menyajikan cheesecake krim-gaya pada kerak kue OREO®, dicampur dengan potongan kue OREO® asli.
',
            'kategori_hidangan' => 'Dessert',
            'harga_hidangan' => 'Rp 15.454',
            'foto_hidangan' => 'dessert_oreo_cheesecake.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Strawberry Shake',
            'deskripsi_hidangan' => 'Bersenang-senanglah dengan Hand Spun Shake Strawberry yang creamy. Velvety vanilla soft serve dan saus strawberry dicampur dengan sempurna dan diakhiri dengan topping kocok manis hanya untuk Anda.',
            'kategori_hidangan' => 'Dessert',
            'harga_hidangan' => 'Rp 13.636',
            'foto_hidangan' => 'dessert_strawberr_shake.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Twix Pie',
            'deskripsi_hidangan' => 'Pie yang dibuat dengan TWIX® memiliki filling karamel kental berwarna krem dengan potongan TWIX® Bars, semuanya bertumpu pada remah remah vanilla.',
            'kategori_hidangan' => 'Dessert',
            'harga_hidangan' => 'Rp 14.545',
            'foto_hidangan' => 'dessert_twixpie.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Chicken Club Salad',
            'deskripsi_hidangan' => 'Salad Chicken Club kami adalah campuran romaine hijau renyah, daun hijau dan selada radicchio, potongan daging asap tebal, keju cheddar parut, tomat matang, dan crouton bawang putih mentega.',
            'kategori_hidangan' => 'Salad',
            'harga_hidangan' => 'Rp 19.090',
            'foto_hidangan' => 'salad_ChickenClubSalad.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Eggnormous Burrito',
            'deskripsi_hidangan' => 'Menampilkan sosis gurih, irisan daging asap tebal, telur tebal, dengan saus Queso, coklat hash emas, ditambah saus pedas yang kental yang dibungkus dengan tortilla tepung hangat dan disajikan',
            'kategori_hidangan' => 'Breakfast',
            'harga_hidangan' => 'Rp 16.363',
            'foto_hidangan' => 'breakfast_EggnormousBurrito.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Garden Side Salad',
            'deskripsi_hidangan' => 'Salad Sisi Taman kami adalah perpaduan selada premium yang dihiasi dengan tomat berair, crouton bergaya rumahan, medley tiga keju, dan pilihan salad salad KEN\'S. Informasi Nutrisi tidak mence',
            'kategori_hidangan' => 'Salad',
            'harga_hidangan' => 'Rp 20.909',
            'foto_hidangan' => 'salad_GardenSideSalad.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Hashbrowns',
            'deskripsi_hidangan' => 'Buat pagi Anda mendesis dengan sisi kecil tanda tangan kami yang renyah, Golden Hash Browns. Informasi nutrisi mencerminkan ukuran sedang.',
            'kategori_hidangan' => 'Breakfast',
            'harga_hidangan' => 'Rp 9.090',
            'foto_hidangan' => 'breakfast_Hashbrowns.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Pancakes dan Sosis',
            'deskripsi_hidangan' => 'Segar dari dapur, Pancake & Sausage Platter kami disajikan dengan tiga pancake lembut yang ditaburi sirup manis dan sisi sosis gurih yang gurih.',
            'kategori_hidangan' => 'Breakfast',
            'harga_hidangan' => 'Rp 12.727',
            'foto_hidangan' => 'breakfast_PancakesandSausages.png',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        

        // Komentar
        DB::table('tb_komentar')->insert([
            'id_pelanggan' => '1',
            'isi_komentar' => 'Aplikasinya bagus mudah digunakan. Saya jadi tahu semua menu yang ada di restoran',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
