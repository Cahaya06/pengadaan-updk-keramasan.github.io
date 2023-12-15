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

        #right-section-profile {
            display: flex;
            flex-direction: row;
            margin-top: -0px;
            margin-left: 700px;
            width: 145%;
            /* Agar right section memenuhi lebar container */
            padding: 25px;
        }

        #kotakprofile-1 {
            flex: 1;
            padding: 150px;
            font-size: 6px;
            margin-left: -10px;
            margin-right: -5px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: #F6F6F6;
            margin-top: -15px;
            margin-bottom: -10px;
        }

        #Foto-Profil {
            background-color: #157F95;
            color: white;
            height: 40px;
            text-align: center;
            margin-right: -850px;
            /* Panjang kotak judul */
            margin-top: 10px;
            margin-left: 700px;
            margin-bottom: 0;
        }

        #Foto-Profil h2 {
            font-size: 16px;
            margin-top: 10px;
        }

        #right-section-contact {
            display: flex;
            flex-direction: row;
            margin-top: -0px;
            margin-left: 700px;
            width: 145%;
            /* Agar right section memenuhi lebar container */
            padding: 25px;
        }

        #kotakcontact-1 {
            flex: 1;
            padding: 50px;
            font-size: 6px;
            margin-left: -10px;
            margin-right: -5px;
            /* Menambah margin antara kotak */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: #F6F6F6;
            margin-top: -15px;
            margin-bottom: 0px;
        }

        #contact {
            background-color: #157F95;
            color: white;
            height: 30px;
            text-align: center;
            margin-right: -850px;
            /* Panjang kotak judul */
            margin-top: 15px;
            margin-left: 700px;
            margin-bottom: 0;
        }

        #contact h2 {
            font-size: 14px;
            margin-top: 5px;
        }

        .box a img {
            width: 23px;
            /* Sesuaikan dengan lebar yang diinginkan */
            height: auto;
            /* Memastikan tinggi disesuaikan dengan lebar agar tidak terdistorsi */
            margin-right: 15px;
            /* Spasi antara gambar */
        }

        #right-section-data {
            display: flex;
            flex-direction: row;
            margin-top: -0px;
            margin-left: 0px;
            width: 99%;
            /* Agar right section memenuhi lebar container */
            padding: 226px;
        }

        #data {
            background-color: #157F95;
            color: white;
            height: 35px;
            text-align: center;
            margin-right: -451px;
            /* Panjang kotak judul */
            margin-top: 0px;
            margin-left: 0px;
            margin-bottom: 0;
        }

        #data h2 {
            font-size: 15px;
            margin-top: 5px;
        }

        .profile-content {
            z-index: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .profile-img {
            position: absolute;
            top: 90px;
            left: 550px;
            width: 120px;
            /* Sesuaikan ukuran gambar profil */
            height: 120px;
            border-radius: 50%;
            margin-right: 20px;
            /* Sesuaikan margin antara gambar profil dan konten profil */
        }

        .profile-img input {
            display: none;
        }

        h3 {
            text-align: left;
            /* Sesuaikan nilai margin sesuai kebutuhan */
            margin-top: -610px;
            color: #185a7f;
        }

        .save-button {
            position: absolute;
            bottom: 250px;
            left: 85%;
            transform: translateX(-50%);
            padding: 10px 20px;
            background: #F6F6F6;
            /* Warna latar belakang tombol */
            border: 1px solid #157F95;
            /* Garis tepi tombol */
            border-radius: 5px;
            cursor: pointer;
            color: #157F95;
            /* Warna teks tombol */
        }

        .profile-container {
            background-color: #fff;
            border-radius: 0px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 614px;
            width: 280%;
        }

        .profile-field {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .profile-field label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .profile-field div {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
            <div id="Foto-Profil">
                <h2>Foto Profil</h2>
            </div>
            <div id="right-section-profile" class="right-section">
                <!-- Kotak 1 -->
                <div class="box" id="kotakprofile-1">
                    <label class="profile-img">
                        <input type="file" accept="image/*" onchange="displayImage(this)">
                        <img src="images/profile.jpg" alt="Profile Image" class="profile-img">
                    </label>
                    <button class="save-button" onclick="saveProfile()">Simpan</button>
                </div>
            </div>
            <div id="contact">
                <h2>Kontak PLN</h2>
            </div>
            <div id="right-section-contact" class="right-section">
                <!-- Kotak 1 -->
                <div class="box" id="kotakcontact-1">
                    <a href="mailto:Pln123@pln.co.id"><img src="images/email.png" alt="Gmail"></a></h2>
                    <a href="https://www.linkedin.com/company/pt-pln-persero-/" target="_blank"><img src="images/linkedin.png" alt="LinkedIn"></a>
                    <a href="https://www.instagram.com/plnip.updkkeramasan/" target="_blank"><img src="images/instagram.png" alt="Instagram"></a>
                    <a href="https://web.facebook.com/explore.skrm" target="_blank"><img src="images/facebook.png" alt="Facebook"></a>
                    <a href="https://www.youtube.com/@plnupdkkeramasan1647" target="_blank"><img src="images/youtube.png" alt="Youtube"></a>
                    <a href="https://www.website.com/yourusername" target="_blank"><img src="images/website.png" alt="Website"></a>
                </div>

            </div>
            <h3>MY PROFILE</h3>
            <div id="data">
                <h2>Informasi Data Diri</h2>
            </div>
            <div class="profile-container">
                <div class="profile-field">
                    <label for="nama">Nama</label>
                    <div id="nama">ANDI WIRYANSYAH</div>
                </div>

                <div class="profile-field">
                    <label for="username">Username</label>
                    <div id="username">Pengadaan</div>
                </div>
                <div class="profile-field">
                    <label for="email">NIK/Nomor Identifikasi Karyawan</label>
                    <div id="email">195002180</div>
                </div>

                <div class="profile-field">
                    <label for="jenisKelamin">Jenis Kelamin</label>
                    <div id="jenisKelamin">Laki-Laki</div>
                </div>

                <div class="profile-field">
                    <label for="email">Email</label>
                    <div id="email">Pejabat062@gmail.com</div>
                </div>

                <div class="profile-field">
                    <label for="noTelepon">No Telepon</label>
                    <div id="noTelepon">0821-1662-2345</div>
                </div>

                <div class="profile-field">
                    <label for="jabatan">Jabatan</label>
                    <div id="jabatan">TL Pengadaan</div>
                </div>
            </div>

            <script>
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
            </script>
            <script>
                function saveProfile() {
                    // Fungsi ini biasanya akan melakukan permintaan ke server untuk menyimpan gambar profil.
                    // Di sini hanya dicontohkan cara mengganti deskripsi profil. Sesuaikan dengan kebutuhan Anda.
                    var newProfileDescription = prompt("Masukkan deskripsi profil baru:");
                    if (newProfileDescription !== null) {
                        document.querySelector('.profile-content p').innerText = newProfileDescription;
                        alert("Profil disimpan!");
                    }
                }
            </script>
            <script>
                function loadProfilePage() {
                    // Misalnya, menggunakan window.location untuk mengarahkan ke halaman profil
                    window.location.href = "Profile.php"; // Sesuaikan dengan URL halaman profil Anda
                }

                // Menambahkan event listener untuk menangani klik pada gambar profil di toolbar
                document.getElementById("profile").addEventListener("click", loadProfilePage);
            </script>


</body>

</html>