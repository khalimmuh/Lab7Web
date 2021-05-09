# Memulai PHP
Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)

<img width="505" alt="htdocs" src="https://user-images.githubusercontent.com/81312138/117582961-e4ca3080-b12e-11eb-8fbc-219857cc33e8.PNG">

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: 
http://localhost/lab7_php_dasar/

<img width="545" alt="index" src="https://user-images.githubusercontent.com/81312138/117582978-f7dd0080-b12e-11eb-8d43-bd78f3f467dc.PNG">

# PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat kode seperti berikut.

<img width="570" alt="doctype" src="https://user-images.githubusercontent.com/81312138/117583036-278c0880-b12f-11eb-9a69-6ad4b6ebbbce.PNG">

Kemudian untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/php_dasar.php

<img width="438" alt="hello_word" src="https://user-images.githubusercontent.com/81312138/117583040-29ee6280-b12f-11eb-8ed1-f90a11801e20.PNG">

# Variable PHP
Variable dalam PHP dinyatakan dengan tanda dollar yang selanjutnya diikuti dengan nama dari variable. nama variable adalah case-sensitive 
jadi huruf besar dan huruf kecil akan berpengaruh.
Menambahkan variable pada program.

<img width="515" alt="menggunakan_vaeiable_code" src="https://user-images.githubusercontent.com/81312138/117583106-91a4ad80-b12f-11eb-9e2a-0cd813082f55.PNG">
<img width="504" alt="menggunakan_vaeiable" src="https://user-images.githubusercontent.com/81312138/117583105-8fdaea00-b12f-11eb-9cda-52e9fad29e61.PNG">

# Predefine Variable $_GET
ariabel $_GET adalah array asosiatif yang berisi nilai dari query string.

<img width="518" alt="predifine_code" src="https://user-images.githubusercontent.com/81312138/117583213-214a5c00-b130-11eb-907f-fb01fc2fdc09.PNG">

Untuk mengaksesnya gunakan URL: 
http://localhost/lab7_php_dasar/latihan2.php?nama=Agung maka output yang akan kita dapatkan adalah:


<img width="601" alt="predifine" src="https://user-images.githubusercontent.com/81312138/117583211-1f809880-b130-11eb-8293-2281e838522a.PNG">

# Membuat Form Input

<img width="505" alt="form_input_code" src="https://user-images.githubusercontent.com/81312138/117583334-dd0b8b80-b130-11eb-9c46-1e1717c0dd71.PNG">
<img width="459" alt="form_input" src="https://user-images.githubusercontent.com/81312138/117583333-db41c800-b130-11eb-9d48-b93b1a2a9ef5.PNG">

# Operator
Operator berfungsi untuk berinteraksi dengan variabel, seperti misalnya menambahkan 2 variabel `integer`, atau mengalikan satu variabel dengan variabel lainnya. Semua itu membutuhkan penggunaan operator.
Di dalam PHP, terdapat berbagai macam operator yang bisa kita gunakan. Kita akan membahas beberapa operator yang paling dasar di dalam PHP dan juga bagaimana cara penggunaannya.
Operator Aritmatika
Operator aritmatika adalah operator untuk menghitung operasi matematika dasar. Mulai dari:
penjumlahan (+) , pengurangan (-) , perkalian (*) dan pembagian (/).

<img width="513" alt="operator_code" src="https://user-images.githubusercontent.com/81312138/117583476-8a7e9f00-b131-11eb-81ff-ad1c538ef8d5.PNG">
<img width="461" alt="operator" src="https://user-images.githubusercontent.com/81312138/117583477-8c486280-b131-11eb-91f2-133a87f0e625.PNG">

# Kondisi IF
 `if`  berfungsi untuk menjalankan suatu segmen fungsi berdasarkan pemeriksaan kondisi tertentu melalui operator logical. 
 Fungsi ELSE Fungsi else merupakan lanjutan dari fungsi if, dimana jika kondisi benar makan statement pertama yang akan dilaksanakan, tetapi apabila kondisi salah maka statement yang ada pada blok else yang akan dilaksanakan.
 
 <img width="557" alt="kondisi_if_code" src="https://user-images.githubusercontent.com/81312138/117583568-0678e700-b132-11eb-9975-366f97739b60.PNG">
<img width="447" alt="kondisi_if" src="https://user-images.githubusercontent.com/81312138/117583570-0842aa80-b132-11eb-93bf-bfbb306b9fc1.PNG">

# Kondisi Switch
bahwa switch case pada php mirip seperti penggunaan if else, yaitu untuk pencabangan dimana aplikasi memeriksa suatu kondisi variable atau hasil perhitungan ekspresi 
dan mengambil tindakan keputusan dengan perintah yang diberikan apabila memenuhi kondisi yang sesuai.

<img width="508" alt="switch_code" src="https://user-images.githubusercontent.com/81312138/117583617-535cbd80-b132-11eb-8768-dffed82ab369.PNG">
<img width="447" alt="switch" src="https://user-images.githubusercontent.com/81312138/117583615-522b9080-b132-11eb-920e-80f45dad0831.PNG">

# Perulangan for
Perulangan `for` adalah perulangan yang paling simpel. Kita bisa menggunakan metode ini dengan menentukan jumlah perulangan yang kita inginkan

<img width="538" alt="perulangan_for_code" src="https://user-images.githubusercontent.com/81312138/117583650-8c952d80-b132-11eb-8c8f-f6f1bcd715e4.PNG">
<img width="434" alt="perulangan" src="https://user-images.githubusercontent.com/81312138/117583652-8e5ef100-b132-11eb-8ce3-39ce73a8cffc.PNG">

# Perulangan while
Jenis perulangan yang kedua adalah perulangan `while`.
Ia hampir sama dengan `for`. Akan tetapi ia lebih ditujukan untuk kasus-kasus di mana kita tidak mengetahui secara pasti ada berapa jumlah perulangan yang harus dilakukan.

<img width="521" alt="while_code" src="https://user-images.githubusercontent.com/81312138/117583681-bc443580-b132-11eb-85e1-fee6f8b32167.PNG">
<img width="478" alt="while" src="https://user-images.githubusercontent.com/81312138/117583683-be0df900-b132-11eb-8eed-6494ce1918b0.PNG">

# Perulangan dowhile
Perulangan `do ... while` sama persis dengan perulangan `while`. Ia sama-sama mengevaluasi ekspresi `boolean`. Selama ekspresi tersebut bernilai `true`, perulangan akan terus dilakukan. Dan jika nilai `boolean` tersebut `false`, perulangan akan dihentikan.

Bedanya hanya satu:

Kalau dalam metode while, ekspresi boolean akan diperiksa terlebih dahulu sebelum memulai perulangan. <br>
Ada pun dengan `do ... while`, ia akan mengeksekusi perulangan terlebih dahulu, baru setelah itu ia akan mengevaluasi kondisi boolean.

<img width="568" alt="downwhile" src="https://user-images.githubusercontent.com/81312138/117583772-42607c00-b133-11eb-8d55-9c60ade468db.PNG">
<img width="460" alt="downwhile_hasil" src="https://user-images.githubusercontent.com/81312138/117583773-442a3f80-b133-11eb-9b09-99bc3283d8b1.PNG">
