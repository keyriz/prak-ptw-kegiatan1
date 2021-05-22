<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
</head>

<body>
    <section class="container d-flex vh-100">
        <div class="m-auto p-5">
            <p class="h5"><strong>Sumber : <a href="https://www.niagahoster.co.id/blog/pengertian-php/" target="_blank">Niagahoster</a> </strong></p>
            <p class="h1 fw-900 title">Pengertian PHP, Fungsi dan Sintaks Dasarnya</p>
            <p class="h5 mb-5">November 2, 2020</p>

            <p class="lead mb-5">
                Dalam pengembangan website, PHP menjadi salah satu bahasa pemrograman yang wajib dipelajari. Alasannya, bahasa pemrograman ini mampu untuk membuat website menjadi dinamis.

                <br>Nah, dalam artikel ini, Anda akan belajar tentang PHP secara lebih dalam. Kami akan membahas mengenai syntax dasar PHP beserta contoh-contohnya. Selain itu, kami juga akan membahas tentang hubungan PHP dengan MySQL.

                <br>Pasti sudah semakin penasaran kan dengan pembahasannya? Sebelum itu, mari pahami dulu pengertian dan fungsi PHP.
            </p>

            <h4 class="font-weight-bold">Pengertian PHP</h4>
            <p class="lead mb-5">
                PHP  (PHP: Hypertext Preprocessor) adalah sebuah bahasa pemrograman server side scripting yang bersifat open source.

                <br>Sebagai sebuah scripting language, PHP menjalankan instruksi pemrograman saat proses runtime. Hasil dari instruksi tentu akan berbeda tergantung data yang diproses.

                <br>PHP merupakan bahasa pemrograman server-side, maka script dari PHP nantinya akan diproses di server. Jenis server yang sering digunakan bersama dengan PHP antara lain Apache, Nginx, dan LiteSpeed.

                <br>Selain itu, PHP juga merupakan bahasa pemrograman yang bersifat open source. Pengguna bebas memodifikasi dan mengembangkan sesuai dengan kebutuhan mereka. Tentunya jika memiliki kemampuan coding yang baik, ya?
            </p>

            <h4 class="font-weight-bold">Mengapa Menggunakan PHP?</h4>
            <p class="lead">
                Saat ini, tak kurang dari 78% website di seluruh dunia menggunakan bahasa pemrograman yang diciptakan Rasmus Lerdorf di tahun 1995 ini. Bahkan platform besar seperti Facebook juga menggunakannya.
                <br>Lalu, apa yang membuat PHP begitu populer? Mengapa menggunakan PHP yang sudah berumur lebih dari dua dekade ini? Berikut beberapa alasannya:
                <ul class="lead">
                    <li>Cenderung mudah dipelajari — dibanding beberapa bahasa pemrograman populer lain, PHP lebih mudah dipelajari.</li>
                    <li>Materi belajar yang melimpah — umur PHP yang “cukup tua” menyebabkan banyak sekali dokumentasi, panduan, dan komunitas aktif bertebaran di jagat maya. Jadi, tak perlu takut jika Anda mengalami kesulitan.</li>
                    <li>PHP bersifat open-source — siapapun bisa menggunakan PHP tanpa mengeluarkan biaya sepeserpun.</li>
                    <li>Kecepatan tinggi — PHP terbukti bisa meningkatkan kecepatan loading dibanding bahasa lain. Misalnya, lebih cepat tiga kali daripada Phyton pada beberapa kasus.</li>
                    <li>Banyaknya pilihan database — PHP bisa digunakan di hampir semua jenis database. Mulai dari MySQL, hingga non-relational database seperti Redis.</li>
                    <li>Kompatibilitas yang baik dengan HTML  — script PHP tidak mengganggu HTML sama sekali. Justru mereka berdua saling melengkapi.</li>
                    <li>Fleksibilitas tinggi — PHP bisa dikombinasikan dengan banyak sekali bahasa pemrograman lain. Sehingga bisa Anda gunakan sesuai kebutuhan.</li>
                    <li>Multi-platform — PHP bisa Anda gunakan di macam-macam operating system. Mulai dari Windows, Linux, hingga MacOS.</li>
                    <li>Selalu diperbarui — sejak pertama kali muncul tahun 1995, sekarang PHP sudah berada pada versi 7.4.</li>
                    <li>Mendukung layanan cloud  — siapa sangka, walaupun umur PHP hampir dua dekade, tapi ia bisa mendukung layanan cloud dengan skalabilitas yang baik.</li>
                </ul>
            </p>
            
            <h4 class="font-weight-bold mt-5">Syntax PHP</h4>
            <p class="lead mb-5">
                <br>Secara umum, fungsi PHP adalah digunakan untuk pengembangan website. Baik website statis seperti situs berita yang tidak membutuhkan banyak fitur. Ataupun website dinamis seperti toko online dengan segudang fitur pendukung.
                <br>Namun, penggunaan PHP tidak terbatas pada pengembangan website saja, lho. Karena fleksibilitasnya yang tinggi, PHP juga bisa digunakan untuk membuat aplikasi komputer sekalipun. Keren juga, ya?
            </p>

            <h4 class="font-weight-bold mt-5">Fungsi PHP</h4>
            <p class="lead">
                Sintaks Dasar PHP
                Setiap bahasa pemrograman memiliki aturan coding sendiri. Begitu pula dengan PHP. Sintaks dasarnya dibuka dengan < ?php dan ditutup dengan ?> sebagai terlihat di contoh berikut:<br>
            </p>
            <p class="lead">
                < ?php <br>
                echo “Selamat datang”; <br>
                ? > <br>
                Inilah penjelasan kode tersebut: <br>
            </p>
            <p class="lead">
                < ?php ini adalah kode wajib untuk membuka program PHP. <br>
                Echo adalah sebuah perintah untuk menampilkan teks. <br>
                “Selamat Datang”; teks yang hendak ditampilkan dan ditulis diantara tanda petik dan titik koma. <br>
                ? > adalah kode untuk mengakhiri PHP dan wajib digunakan saat digabung dengan bahasa pemrograman lain seperti HTML. <br>
                Sintaks PHP bersifat case sensitive. Jadi, penggunaan huruf besar atau kecil akan turut mempengaruhi output yang diberikan. Sebagai contoh : <br>
            </p>
            <p class="lead">
                < ?php <br>
                $alamat  = “Yogyakarta”; <br>
                echo $alamat; <br>
                ? > <br>
                Kode di atas akan menghasilkan output: Yogyakarta di halaman website. <br>
            </p>
        </div>
    </section>
</body>

</html>
