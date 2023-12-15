<?php
// index.php
require_once 'Dashboard.php';
require_once 'Dash2.php';

// Menambahkan kode baru di dalam file index
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link ke file style.css jika diperlukan -->
    <link rel="stylesheet" href="style.css">
    <style>
        #right-section-container {
            display: flex;
            flex-direction: column;
            width: calc(100% - 850px);
        }

        .right-section {
            flex: 1;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        #right-section-5 {
            display: flex;
            flex-direction: row;
            background-color: #ededee;
            margin-bottom: 0;
            margin-top: -0px;
            margin-left: 450px;
            width: 243%;
            /* Agar right section memenuhi lebar container */
            padding: 40px;
            /*panjang kotak*/
            position: relative;
        }

        #right-section-5::after {
            content: "";
            border-right: 8px solid #157F95;
            height: 100%;
            /* Membuat tinggi sesuai tinggi #right-section-5 */
            position: absolute;
            left: 305px;
            /* Menempatkan di sebelah kanan #right-section-5 */
            margin-top: -40px;
        }

        #kotak5-1 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -15px;
            margin-right: 500px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak5-2 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -485px;
            margin-right: 0px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak5-3 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: 15px;
            margin-right: 100px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak5-4 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -85px;
            margin-right: -10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #Realisasi-Bulanan {
            background-color: #157f95;
            color: white;
            height: 30px;
            text-align: center;
            margin-top: -5px;
            margin-left: 450px;
            margin-right: -849px;
            /* Panjang kotak judul */
        }

        #Realisasi-Bulanan h2 {
            font-size: 12px;
            margin-top: 0px;
            padding-top: 8px;
        }

        #right-section-6 {
            display: flex;
            flex-direction: row;
            background-color: white;
            margin-bottom: 20px;
            margin-top: -252px;
            margin-left: 0px;
            width: 138%;
            /* Agar right section memenuhi lebar container */
            padding: 62px;
            /*panjang kotak*/
        }

        #kotak6-1 {
            flex: 1;
            padding: 20px;
            font-size: 16px;
            /* Sesuaikan jika perlu */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-bottom: 20px;
            /* Sesuaikan jika perlu */
        }

        #right-section-7 {
            display: flex;
            flex-direction: column;
            background-color: white;
            height: 320px;
            margin-top: 0px;
            margin-left: 0px;
            width: 25%;
            /* Agar right section memenuhi lebar container */
            padding: 10px;
        }

        #user h2 {
            font-size: 14px;
            color: bold;
            text-align: center;
            margin-top: 0px;
            margin-left: 2px;
            padding-top: 5px;
        }

        #kotak7-1 {
            flex: 1;
            padding: 5px;
            font-size: 6px;
            text-align: center;
            margin-left: 0px;
            margin-right: 0px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            width: 85%;
            background-color: #E2E2E3;
            margin-top: -5px;
            margin-bottom: 20px;
        }

        #right-section-8 {
            display: flex;
            flex-direction: row;
            background-color: #ededee;
            margin-bottom: 0;
            margin-top: -0px;
            margin-left: 95px;
            width: 176%;
            /* Agar right section memenuhi lebar container */
            padding: 40px;
            /*panjang kotak*/
            position: relative;
        }

        #right-section-8::after {
            content: "";
            border-right: 8px solid #157F95;
            height: 100%;
            /* Membuat tinggi sesuai tinggi #right-section-5 */
            position: absolute;
            left: 235px;
            /* Menempatkan di sebelah kanan #right-section-5 */
            margin-top: -40px;
        }

        #kotak8-1 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -15px;
            margin-right: 500px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak8-2 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -485px;
            margin-right: 0px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak8-3 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: 15px;
            margin-right: 100px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak8-4 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -85px;
            margin-right: -10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #Ophar {
            background-color: #157f95;
            color: white;
            height: 30px;
            text-align: center;
            margin-top: -358px;
            margin-left: 95px;
            margin-right: -345px;
            /* Panjang kotak judul */
        }

        #Ophar h2 {
            font-size: 12px;
            margin-top: 0px;
            padding-top: 8px;
        }

        #right-section-9 {
            display: flex;
            flex-direction: row;
            background-color: #ededee;
            margin-bottom: 0;
            margin-top: -0px;
            margin-left: 590px;
            width: 180%;
            /* Agar right section memenuhi lebar container */
            padding: 40px;
            /*panjang kotak*/
            position: relative;
        }

        #kotak9-1 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -15px;
            margin-right: 500px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak9-2 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -485px;
            margin-right: 0px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak9-3 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: 15px;
            margin-right: 100px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak9-4 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -85px;
            margin-right: -10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #Terkontrak {
            background-color: #157f95;
            color: white;
            height: 30px;
            text-align: center;
            margin-top: -160px;
            margin-left: 590px;
            margin-right: -848px;
            /* Panjang kotak judul */
        }

        #Terkontrak h2 {
            font-size: 12px;
            margin-top: 0px;
            padding-top: 8px;
        }

        #right-section-10 {
            display: flex;
            flex-direction: row;
            background-color: #ededee;
            margin-bottom: 0;
            margin-top: -0px;
            margin-left: 300px;
            width: 95%;
            /* Agar right section memenuhi lebar container */
            padding: 32px;
            /*panjang kotak*/
        }

        #Proker {
            background-color: #157f95;
            color: white;
            height: 30px;
            text-align: center;
            margin-top: -162px;
            margin-left: 300px;
            margin-right: -354px;
            /* Panjang kotak judul */
        }

        #Proker h2 {
            font-size: 12px;
            margin-top: 0px;
            padding-top: 8px;
        }

        #right-section-11 {
            display: flex;
            flex-direction: row;
            background-color: #ededee;
            margin-bottom: 0;
            margin-top: -0px;
            margin-left: 590px;
            width: 180%;
            /* Agar right section memenuhi lebar container */
            padding: 40px;
            /*panjang kotak*/
            position: relative;
        }

        #kotak11-1 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -15px;
            margin-right: 500px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak11-2 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -485px;
            margin-right: 0px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak11-3 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: 15px;
            margin-right: 100px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak11-4 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -85px;
            margin-right: -10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #BlmTerkontrak {
            background-color: #157f95;
            color: white;
            height: 30px;
            text-align: center;
            margin-top: 20px;
            margin-left: 590px;
            margin-right: -848px;
            /* Panjang kotak judul */
        }

        #BlmTerkontrak h2 {
            font-size: 12px;
            margin-top: 0px;
            padding-top: 8px;
        }

        #right-section-12 {
            display: flex;
            flex-direction: row;
            background-color: #ededee;
            margin-bottom: 0;
            margin-top: -0px;
            margin-left: 96px;
            width: 62%;
            /* Agar right section memenuhi lebar container */
            padding: 25px;
            /*panjang kotak*/
        }

        #Blmkontrak {
            background-color: #157f95;
            color: white;
            height: 30px;
            text-align: center;
            margin-top: -158px;
            margin-left: 96px;
            margin-right: -62px;
            /* Panjang kotak judul */
        }

        #Blmkontrak h2 {
            font-size: 12px;
            margin-top: 0px;
            padding-top: 8px;
        }

        #NoBlmkontrak h2 {
            font-size: 35px;
            text-align: center;
            margin-top: 0px;
            padding-top: 8px;
        }
    </style>
</head>

<body>

    <main>
        <section class="left-section">
            <?php
            // Menampilkan konten dari file_lama.php di left section
            fungsi_lama();
            ?>
        </section>

        <div id="Realisasi-Bulanan">
            <h2>Realisasi Terbayar dan Terbeban S.D Bulan Berjalan</h2>
        </div>
        <section id="right-section-5" class="right-section">
            <div class="box" id="kotak5-1">
                <h2>Nilai Terbayar</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
            <div class="box" id="kotak5-2">
                <h2>% Terbayar</h2>
            </div>
            <div class="box" id="kotak5-3">
                <h2>Nilai Terbeban</h2>
            </div>
            <div class="box" id="kotak5-4">
                <h2>% Terbeban</h2>
            </div>
        </section>
        <section id="right-section-6" class="right-section">
            <div class="box" id="kotak6-1">
                <h2>Diagram</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
        </section>
        <section id="right-section-7" class="right-section">
            <div id="user">
                <h2>USER</h2>
            </div>
            <div class="box" id="kotak7-1">
                <h2>OPHAR</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
            <div class="box" id="kotak7-1">
                <h2>K3</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
            <div class="box" id="kotak7-1">
                <h2>UH</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
            <div class="box" id="kotak7-1">
                <h2>KU</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
            <div class="box" id="kotak7-1">
                <h2>ENJ</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
            <div class="box" id="kotak7-1">
                <h2>LAKDAN</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
        </section>

        <div id="Ophar">
            <h2>OPHAR</h2>
        </div>
        <section id="right-section-8" class="right-section">
            <div class="box" id="kotak8-1">
                <h2>PRK</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
            <div class="box" id="kotak8-2">
                <h2>% PRK MURNI</h2>
            </div>
            <div class="box" id="kotak8-3">
                <h2>Anggaran Murni</h2>
            </div>
            <div class="box" id="kotak8-4">
                <h2>% Anggaran</h2>
            </div>
        </section>
        <div id="Terkontrak">
            <h2>TERKONTRAK</h2>
        </div>
        <section id="right-section-9" class="right-section">
            <div class="box" id="kotak9-1">
                <h2>PRK</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
            <div class="box" id="kotak9-2">
                <h2>% PRK MURNI</h2>
            </div>
            <div class="box" id="kotak9-3">
                <h2>Anggaran Murni</h2>
            </div>
            <div class="box" id="kotak9-4">
                <h2>% Anggaran</h2>
            </div>
        </section>
        <div id="BlmTerkontrak">
            <h2>TOTAL BELUM TERKONTRAK</h2>
        </div>
        <section id="right-section-11" class="right-section">
            <div class="box" id="kotak11-1">
                <h2>PRK</h2>
                <!-- Konten kotak 1-1 di sini -->
            </div>
            <div class="box" id="kotak11-2">
                <h2>% PRK MURNI</h2>
            </div>
            <div class="box" id="kotak11-3">
                <h2>Anggaran Murni</h2>
            </div>
            <div class="box" id="kotak11-4">
                <h2>% Anggaran</h2>
            </div>
        </section>
        <div id="Proker">
            <small>
                <h2>Nama Program kerja/Nama Pekerjaan</h2>
            </small>
        </div>
        <section id="right-section-10" class="right-section">
            <small>
                <h6>JASA REPAIR LUBE OIL COOLER, FLEXIBEL OIL PLTD SUNGAI JUARO</h6>
            </small>
        </section>
        <div id="Blmkontrak">
            <h2>Belum Terkontrak</h2>
        </div>
        <section id="right-section-12" class="right-section">
            <div id="NoBlmkontrak" style="width: 130px;">
                <h2>1</h2>
            </div>
        </section>

        <script>
            // Menambahkan penanganan klik untuk setiap kotak tanggal
            var kotak7Elements = document.querySelectorAll('#right-section-7 .box');
            kotak7Elements.forEach(function(kotak) {
                kotak.addEventListener('click', function() {
                    // Menghapus warna latar belakang dari semua kotak tanggal
                    kotak7Elements.forEach(function(element) {
                        element.style.backgroundColor = '';
                        element.querySelector('h2').style.color = 'black';
                    });

                    // Mengubah warna latar belakang saat diklik
                    this.style.backgroundColor = '#157F95';
                    this.querySelector('h2').style.color = 'white'; // Mengubah warna teks menjadi putih
                });
            });
        </script>
    </main>

</body>

</html>