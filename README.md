<h1 align="center">API Aplikasi Android Restoran</h1>
<p align="center">Laravel API untuk aplikasi android restoran</p>

## Cara pakek
1. Clone repository, letakkan di htdocs
```
git clone https://github.com/jhonarendra/api-android-restoran.git
```
2. Pindah directory ke folder api, lalu install composer
```
composer install
```
3. Buat file .env
```
echo > .env
```
4. Buka file .env.example, copy semua isinya ke file .env
5. Bikin database baru
6. Isi konfigurasi database di file .env, contohnya
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_fifteen_resto
DB_USERNAME=root
DB_PASSWORD=
```
7. Bikin key
```
php artisan key:generate
```
8. Migrate database
```
php artisan migrate
```
9. Insert data ke db
```
php artisan db:seed
```

## Jalankan API di Android
1. Buka aplikasi restoran di android
2. Jalankan server api
```
php artisan serve --host 0.0.0.0
```
3. Isikan URL api ke aplikasi android
4. Sambungkan hp dan laptop
5. Run aplikasi android studio

## Penjelasan
<p>Tak ambil contoh cara buat fungsi register</p>

1. Di api laravel, buat controller resource
```
php artisan make:controller PelangganController --resource
```
2. Akan terbuat controller di `app/Http/Controllers/PelangganController.java`. Lalu buat model `Pelanggan.java` di folder `app/`. (Di model ditentuin tabel yg dipakai, dan kolom yg bisa di isi)
3. Buat fungsi register di `PelangganController.java`
```php
    public function register(Request $request){ // Request $request itu method ngirim datanya
    	// ini fungsi untuk validasi data
    	$validator = Validator::make($request->all(),[
            'nama_pelanggan' => 'required',
            'email_pelanggan' => 'required|unique:tb_pelanggan', // email sama username kan gak boleh sama sama user lain
            'username_pelanggan' => 'required|unique:tb_pelanggan',
            'password_pelanggan' => 'required'
        ]);

        if ($validator->fails()) { // jika data yg dikirim dari android nanti gagal di validasi
            return response()->json([ // di berikan respons json berikut
                'success' => false,
                'message' => 'Gagal menambahkan data'
            ]);
        } else { // jika data yg dikirim berhasil di validasi
        	Pelanggan::create([ // insert data ke database (panggil NamaModel::fungsi(['kolom_tabel' => 'data']))
        	    'nama_pelanggan' => $request->nama_pelanggan, // data yg di kirim dengan variabel nama_pelanggan
        	    'email_pelanggan' => $request->email_pelanggan,
        	    'username_pelanggan' => $request->username_pelanggan,
        	    'password_pelanggan' => md5($request->password_pelanggan), // md5 hash
        	]);
        	return response()->json([// habis insert data, dikasi respons
                'success' => true,
                'message' => 'Berhasil menambahkan data'
            ]);
        }

    }
``` 
4. Buat routing url untuk fungsi register. Caranya, buka file `routes/web.php`
```php
Route::group(['prefix'=>'pelanggan'], function(){ // route untuk URL http://localhost/pelanggan
	Route::post('register', 'PelangganController@register');
	// Route::<method>('URI', 'NamaController@namaFungsi');
	// Karena ngirim data dari android, api harus nerima data makanya pake method post. Jadi yg ini URL nya http://localhost/pelanggan/register, manggil di fungsi register yg dibuat tadi
});
```
5. Tes fungsi register (aku pake Postman, seperti screenshot dibawah)
6. Kalau udah mau, lanjut ke android studio. Pertama, implement package retrofit di `build.gradle` modul app.
```java
    implementation 'com.squareup.retrofit2:retrofit:2.1.0'
    implementation 'com.squareup.retrofit2:converter-gson:2.1.0'
```
7. Bikin kelas untuk api(`api/RegisterAPI.java`).
8. Bikin kelas `api/Value.java` fungsinya untuk menampung respons json tadi.
```java
	Boolean success; // pas di fungsi register di API, kan ada respons 'success' => true atau false.
	public Boolean getSuccess() {
        return success; // Diambil value dari json itu.
    }
```
9. Register url dari fungsi register ke `api/RegisterAPI.java`
```java
@FormUrlEncoded
    @POST("pelanggan/register") // Sesuaikan method yg ada di routes/web.php tadi. Tadi kan method post
    Call<Value> register(@Field("nama_pelanggan") String nama_pelanggan,
                         @Field("email_pelanggan") String email_pelanggan,
                         @Field("username_pelanggan") String username_pelanggan,
                      @Field("password_pelanggan") String password_pelanggan);
    // Call<Value>: Value itu kelas untuk nampung hasil respons.
    // Call<Value> register: register nya itu nama method. isinya @Field sama variabel sesuai data apa aja yg dikirim.
```
10. Inisialisasi URL api. Aku taruh di `Main2Activity.java`
```java
public static final String URL = "http://192.168.43.102:8000/";
// jadi nanti kalo di activity lain mau pakai api, tinggal panggil (Main2Activity.URL)
```
11. Buka class `RegisterActivity.java`, aku mau manggil apinya
```java
	case R.id.tv_register_r: // ketika tombol "REGISTER" di klik

		// ngambil data data yg dimasukkan
	    final String inputNama = etNama.getText().toString();
	    final String inputEmail = etEmail.getText().toString();
	    final String inputUsername = etUsernameR.getText().toString();
	    final String inputPassword = etPasswordR.getText().toString();
		
		// manggil api
	    Retrofit retrofit = new Retrofit.Builder()
	            .baseUrl(Main2Activity.URL) // ini URL api
	            .addConverterFactory(GsonConverterFactory.create())
	            .build();
	    RegisterAPI api = retrofit.create(RegisterAPI.class);

	    // ini manggil fungsi register yg ada di 'api/RegisterAPI.java'
	    Call<Value> call = api.register(inputNama, inputEmail, inputUsername, inputPassword);
	    // jadi data itu akan dikirim di "pelanggan/register" di api, ke fungsi register di PelangganController.java.

	    // ketik aja 'call.enqueue(new .. lalu muncul menu terus pilih Callback)' otomatis muncul override nya.
	    call.enqueue(new Callback<Value>() {
             @Override
             public void onResponse(Call<Value> call, Response<Value> response) {
                 Boolean success = response.body().getSuccess(); // di kelas Value.java sudah dibuat fungsi untuk ngambil variable 'success' di json.
                 if (success){ // jika success = true
                     Toast.makeText(RegisterActivity.this, "Akun " + inputNama + " berhasil dibuat!", Toast.LENGTH_SHORT).show(); // muncul toast

                     sharedPreferences.edit() // masukkin ke sharedpreferences
                             .putString("login","true")
                             .putString("nama",inputNama)
                             .apply();
                     Intent intent=new Intent(getApplicationContext(),Main2Activity.class);// pindah activity
                     startActivity(intent);
                     finish();
                 } else {
                     Toast.makeText(RegisterActivity.this, "Gagal membuat akun", Toast.LENGTH_SHORT).show();
                 }
             }

             @Override
             public void onFailure(Call<Value> call, Throwable t) {

             }
         });
	    break;
```
12. Build and Run App.

## Screenshot
![](https://raw.githubusercontent.com/jhonarendra/api-android-restoran/master/screenshot/img1.png)
![](https://raw.githubusercontent.com/jhonarendra/api-android-restoran/master/screenshot/img2.png)
![](https://raw.githubusercontent.com/jhonarendra/api-android-restoran/master/screenshot/img3.png)

## Progmob 15
|Nim	    |Nama				|
|-----------|-----------------------------------|
|1605551074 |OKA WISNU MAHAPUTRA		|
|1605551082 |NI PUTU VERANIA LOIS SINTIA	|
|1605551063 |MADE RIZKY KRISNA ADI		|
|1605551067 |I PUTU AGASTYA HARTA PRATAMA SR	|
|1605551016 |Gede Haris Premana Wibawa		|
|1605551100 |MARTIN WILLIAM BUTAR BUTAR		|
|1605551049 |Putu Jhonarendra			|
