<?php
// Check jika form login telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Contoh verifikasi sederhana (gantilah dengan logika login yang sesuai)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh: Jika username dan password adalah "admin", maka dianggap berhasil login
    if ($username === "pengadaan" && $password === "pengadaan123") {
        header("Location: Dashbaru.php"); // Redirect ke halaman dashboard setelah login sukses
        exit();
    } else {
        $error_message = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .left-side {
            background-color: #157F95;
            color: white;
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .right-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-form {
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: white;
        }

        .login-form h2 {
            text-align: center;
            color: #157F95;
        }

        .login-form label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }

        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #157F95;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="left-side">
        <div>
            <center><img src="images/logo.png" alt="Welcome Image" style="width: 60%; max-width: 400px;"></center>
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
    </div>
    <div class="right-side">
        <div class="login-form">
            <h2>Silahkan Login</h2>
            <!-- Menampilkan pesan kesalahan jika login gagal -->
            <?php if (isset($error_message)) : ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <!-- Form login -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" class="login-button">Login</button>
            </form>
        </div>
    </div>
</body>

</html>