<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ededee;
            display: flex;
            height: 135vh;
        }

        #toolbar {
            background-color: white;
            height: 60px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            display: flex;
        }

        #content-title {
            flex-grow: 1;
            text-align: center;
            color: #185a7f;
            margin-left: 5%;
            font-size: 18px;
            font-weight: bold;
        }

        #profile {
            display: flex;
            align-items: center;
        }

        #toolbar img {
            width: 40px;
            height: 40px;
        }

        #content {
            flex: 1;
            display: flex;
            flex-direction: column;
            background-color: #ededee;
            /* Background color for the content area */
            padding: 20px;
            /* naik/turun right-section */
        }

        #content-toolbar {
            background-color: white;
            height: 30px;
            display: flex;
            align-items: center;
            padding: 0 10px;
            margin-bottom: 20px;
        }

        #toolbar-content {
            display: flex;
            align-items: center;
            height: 100%;
            /* Mengatur tinggi elemen agar memanjang */
        }


        #content-toolbar img {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            /* Membuat gambar menjadi lingkaran */
            object-fit: cover;
            margin-left: auto;
        }

        #profileContent img {
            max-width: 100px;
            /* Batasi lebar gambar profil jika perlu */
            border-radius: 50%;
            /* Bulatkan sudut gambar profil */
            margin-bottom: 10px;
            /* Tambahkan jarak di bagian bawah gambar profil */
        }

        #profileContent h1 {
            color: #185a7f;
            /* Ubah warna teks sesuai kebutuhan Anda */
        }

        #profileContent p {
            font-size: 16px;
            /* Sesuaikan ukuran font sesuai kebutuhan Anda */
            line-height: 1.6;
            /* Sesuaikan tinggi baris sesuai kebutuhan Anda */
        }

        #sidebar {
            height: 135vh;
            /* Set tinggi menjadi 100% dari tinggi viewport */
            width: 253px;
            background-color: #157F95;
            overflow-x: hidden;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            transition: background-color 0.3s ease;
        }

        #sidebar a {
            padding: 12px 20px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: flex;
            align-items: center;
            position: relative;
        }

        #sidebar a.non-clickable {
            padding: 12px 20px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: flex;
            align-items: center;
            position: relative;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }

        #sidebar #profile {
            text-align: center;
            padding: 20px 0;
            background-color: #185a7f;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }

        #sidebar #profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        #sidebar a img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        #sidebar a span {
            margin: 0 0 5px 10px;
        }

        #sidebar a:hover {
            background-color: #185a7f;
        }

        #sidebar a.non-clickable {
            pointer-events: none;
            color: #aaa;
            position: relative;
        }

        #sidebar a.non-clickable::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }

        #sidebar .separator {
            height: 1px;
            background-color: white;
            width: 80%;
            position: absolute;
            bottom: 0;
            left: 20px;
        }

        #sidebar .separator.full-width {
            width: calc(100% - 40px);
            left: 20px;
        }

        #sidebar a.non-clickable span {
            color: white;
            margin-top: 5px;
            /* Menambah jarak antara ikon dan teks */
        }

        #sidebar a.non-clickable img {
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }

        #sidebar #dashboardLink.active {
            background-color: #185a7f;
        }

        #sidebar a[href="logout.php"] {
            margin-top: 500px;
            /* Sesuaikan nilai sesuai keinginan Anda */
        }

        #sidebar a[href="logout.php"] {
            padding-top: 20px;
            /* Sesuaikan nilai sesuai keinginan Anda */
        }

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

        #right-section-1 {
            display: flex;
            flex-direction: row;
            margin-left: 0px;
            width: 82%;
            /* Agar right section memenuhi lebar container */
        }

        #right-section-2 {
            display: flex;
            flex-direction: row;
            margin-top: -10px;
            margin-left: 265px;
            width: 255%;
            /* Agar right section memenuhi lebar container */
            padding: 25px;
        }

        #right-section-3 {
            display: flex;
            flex-direction: row;
            margin-top: -0px;
            margin-left: 900px;
            width: 55%;
            /* Agar right section memenuhi lebar container */
            padding: 25px;
        }

        #right-section-tanggal {
            display: flex;
            flex-direction: row;
            background-color: white;
            margin-top: -0px;
            margin-left: 450px;
            width: 270%;
            /* Agar right section memenuhi lebar container */
            padding: 10px;
        }

        #kotak1-1 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -15px;
            margin-right: 10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak1-2 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: 0px;
            margin-right: -10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotak2-1 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: -15px;
            margin-right: 10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -5px;
            margin-bottom: -10px;
        }

        #kotak2-2 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: 0px;
            margin-right: -10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -5px;
            margin-bottom: -10px;
        }

        #kotak2-3 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: 20px;
            margin-right: -10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -5px;
            margin-bottom: -10px;
        }

        #kotak2-4 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: 20px;
            margin-right: -10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -5px;
            margin-bottom: -10px;
        }

        #kotak2-5 {
            flex: 1;
            padding: 20px;
            font-size: 6px;
            margin-left: 20px;
            margin-right: -10px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -5px;
            margin-bottom: -10px;
        }

        #kotak3-1 {
            flex: 1;
            padding: 30px;
            font-size: 6px;
            margin-left: -10px;
            margin-right: -5px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #kotaktanggal-1 {
            flex: 1;
            padding: 5px;
            font-size: 6px;
            margin-left: 10px;
            margin-right: 5px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            background-color: #E2E2E3;
            margin-top: -5px;
            margin-bottom: 5px;
        }

        #penetapan-anggaran {
            background-color: #157F95;
            color: white;
            height: 30px;
            text-align: center;
            margin-top: 0;
            margin-right: -20px;
            margin-bottom: 0;
        }

        #Realisasi-Penyerapan-Anggaran-2023 {
            background-color: #157F95;
            color: white;
            height: 30px;
            text-align: center;
            margin-right: -661px;
            /* Panjang kotak judul */
            margin-top: -162px;
            margin-left: 265px;
            margin-bottom: 0;
        }

        #penetapan-anggaran h2 {
            font-size: 12px;
            margin-top: 10px;
        }

        #Realisasi-Penyerapan-Anggaran-2023 h2 {
            font-size: 12px;
            margin-top: 10px;
        }

        #Saving-AO-2023 {
            background-color: #157F95;
            color: white;
            height: 30px;
            text-align: center;
            margin-right: -850px;
            /* Panjang kotak judul */
            margin-top: -162px;
            margin-left: 900px;
            margin-bottom: 0;
        }

        #Saving-AO-2023 h2 {
            font-size: 12px;
            margin-top: 10px;
        }

        #tanggal-2023 {
            background-color: white;
            color: black;
            height: 30px;
            text-align: center;
            margin-top: 0;
            margin-left: 450px;
            margin-right: -849px;
            margin-bottom: 0;
        }

        #tanggal-2023 h2 {
            font-size: 12px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div id="sidebar">
        <a href="#" class="non-clickable">
            <img src="images/logo.png" alt="Indonesia Power Icon" style="width: 40px; height: 50px; margin-right: 20px;">
            <span style="margin: 10px 0;">Indonesia Power</span>
        </a>
        <a href="Dashbaru.php" id="dashboardLink">
            <img src="images/home.png" alt="Dashboard Icon" style="width: 20px; height: 20px; margin-right: 20px;">
            <span style="margin: 10px 0;">Dashboard</span>
        </a>
        <a href="Data.php">
            <img src="images/Kontak.png" alt="Contact Icon" style="width: 20px; height: 20px; margin-right: 20px;">
            <span style="margin: 10px 0;">Data</span>
        </a>
        <a href="settings.php">
            <img src="images/settings.png" alt="Settings Icon" style="width: 20px; height: 20px; margin-right: 20px;">
            <span style="margin: 10px 0;">Pengaturan</span>
            <div class="separator"></div>
        </a>
        <a href="logout.php">
            <img src="images/Logout.png" alt="Logout Icon" style="width: 20px; height: 20px; margin-right: 20px;">
            <span style="margin: 5px 0; ">Logout</span>
        </a>
    </div>

    <div id="content">
        <div id="profileContent"></div>
        <div id="content-toolbar">
            <div id="content-title">Anggaran Operasi 2023</div>
            <div id="profileDescription"></div>
            <div id="profile">
                <img src="images/profile.jpg" alt="Profile Image" style="width: 30px; height: 30px; margin-right: 20px;">
                <span><small>Pengadaan</small></span>
            </div>
        </div>


        <div id="right-section-container">
            <!-- Tambahkan kotak untuk "Penetapan Anggaran 2023" di atas kotak 1, kotak 2, dan kotak 3 -->
            <div id="penetapan-anggaran">
                <h2>Penetapan Anggaran 2023</h2>
            </div>

            <div id="right-section-1" class="right-section">
                <!-- Kotak 1 -->
                <div class="box" id="kotak1-1">
                    <h2>Pagu Anggaran</h2>
                    <!-- Konten kotak 1-1 di sini -->
                </div>

                <!-- Kotak 2 -->
                <div class="box" id="kotak1-2">
                    <h2>Jumlah PRK</h2>
                    <!-- Konten kotak 1-2 di sini -->
                </div>
            </div>

            <div id="Realisasi-Penyerapan-Anggaran-2023">
                <h2>Realisasi Penyerapan Anggaran 2023</h2>
            </div>
            <div id="right-section-2" class="right-section">
                <div class="box" id="kotak2-1">
                    <h2>Jumlah PRK</h2>
                    <!-- Konten right section kedua di sini -->
                </div>
                <div class="box" id="kotak2-2">
                    <h2>Anggaran Terkontrak</h2>
                    <!-- Konten right section kedua di sini -->
                </div>
                <div class="box" id="kotak2-3">
                    <h2>Anggaran Terkontrak</h2>
                    <!-- Konten right section kedua di sini -->
                </div>
                <div class="box" id="kotak2-4">
                    <h2>Anggaran Kontrak Murni</h2>
                    <!-- Konten right section kedua di sini -->
                </div>
                <div class="box" id="kotak2-5">
                    <h2>Anggaran Belum Terkontrak</h2>
                    <!-- Konten right section kedua di sini -->
                </div>
            </div>

            <div id="Saving-AO-2023">
                <h2>Saving AO 2023</h2>
            </div>
            <div id="right-section-3" class="right-section">
                <!-- Kotak 1 -->
                <div class="box" id="kotak3-1">
                    <h2>Saving AO 2023</h2>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
            </div>

            <div id="tanggal-2023">
                <center>
                    <img src="images/arrow_left.png" alt="Left Arrow" style="width: 20px; height: 12px; margin-right: 2px; margin-left: 50px; margin-top: 8px;" onclick="changeYear('left')">
                    <span id="yearDisplay"><small>2023</small></span>
                    <img src="images/arrow_right.png" alt="Right Arrow" style="width: 20px; height: 12px; margin-right: 20px; margin-top: 8px;" onclick="changeYear('right')">
                </center>
            </div>
            <div id="right-section-tanggal" class="right-section">
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>1</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>2</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>3</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>4</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>5</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>6</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>7</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>8</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>9</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>10</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>11</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
                <div class="box" id="kotaktanggal-1">
                    <center>
                        <h2>12</h2>
                    </center>
                    <!-- Konten kotak 1-1 di sini -->
                </div>
            </div>
            <script>
                // Skrip JavaScript untuk menandai halaman pengaturan
                document.addEventListener('DOMContentLoaded', function() {
                    var dashboardLink = document.getElementById('dashboardLink');
                    dashboardLink.classList.add('active');


                    // Menambahkan penanganan klik untuk setiap kotak tanggal
                    var kotakTanggalElements = document.querySelectorAll('#right-section-tanggal .box');
                    kotakTanggalElements.forEach(function(kotak) {
                        kotak.addEventListener('click', function() {
                            // Menghapus warna latar belakang dari semua kotak tanggal
                            kotakTanggalElements.forEach(function(element) {
                                element.style.backgroundColor = '';
                                element.querySelector('h2').style.color = 'black';
                            });

                            // Mengubah warna latar belakang saat diklik
                            this.style.backgroundColor = '#157F95';
                            this.querySelector('h2').style.color = 'white'; // Mengubah warna teks menjadi putih
                        });
                    });
                });
            </script>
            <script>
                function loadProfilePage() {
                    // Misalnya, menggunakan window.location untuk mengarahkan ke halaman profil
                    window.location.href = "Profile.php"; // Sesuaikan dengan URL halaman profil Anda
                }

                // Menambahkan event listener untuk menangani klik pada gambar profil di toolbar
                document.getElementById("profile").addEventListener("click", loadProfilePage);
            </script>

            <script>
                var currentYearIndex = 4; // Index tahun '2023' di dalam array ['2019', '2020', '2021', '2022', '2023', '2024']

                function changeYear(direction) {
                    var years = ['2019', '2020', '2021', '2022', '2023', '2024'];

                    if (direction === 'left') {
                        currentYearIndex = (currentYearIndex - 1 + years.length) % years.length;
                    } else {
                        currentYearIndex = (currentYearIndex + 1) % years.length;
                    }

                    document.getElementById('yearDisplay').innerHTML = '<small>' + years[currentYearIndex] + '</small>';
                }
                // file_lama.js
                function fungsiDashbaord() {
                    console.log("Ini adalah fungsi dari file Dashboard.");
                }
                <?php
                // Dashboard.php
                function fungsi_lama()
                {
                }
                ?>
            </script>
</body>

</html>