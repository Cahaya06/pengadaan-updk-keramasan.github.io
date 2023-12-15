<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #157F95;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: white;
        }

        .loading-container {
            text-align: center;
        }

        .loader {
            border: 8px solid #fff;
            border-top: 8px solid #157F95;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="loading-container">
        <div>
            <center><img src="images/logo.png" alt="Welcome Image" style="width: 30%; max-width: 400px;"></center>
        </div>
        <div class="welcome-text">
            <center>
                <h2>SELAMAT DATANG</h2>
            </center>
            <center>
                <h1>DI PENGADAAN</h1>
            </center>
            <center>
                <h2>PT PLN IP UPDK KERAMASAN</h2>
            </center>
        </div>
        <div class="loader"></div>
        <p>Mohon tunggu sebentar...</p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "logout.php";
        }, 3000); // Waktu dalam milidetik (misal: 3000 untuk 3 detik)
    </script>
</body>

</html>