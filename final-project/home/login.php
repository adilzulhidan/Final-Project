<?php
include 'db.php'; // Menghubungkan ke database
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fatvrahman Trip</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
    <link rel="stylesheet" href="../assets/styles/styles.css"> <!-- Link ke file CSS terpisah -->
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center">Login</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
        </form>
    </div>

    <?php
    // Proses login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Mencari pengguna berdasarkan email
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Memeriksa password
            if (password_verify($password, $user['password'])) {
                // Login berhasil
                echo "<script>alert('Login berhasil!'); window.location.href='index.php';</script>"; // Ganti index.php dengan halaman yang ingin dituju
            } else {
                echo "<script>alert('Password salah.');</script>";
            }
        } else {
            echo "<script>alert('Email tidak terdaftar.');</script>";
        }
    }

    // Close connection
    $conn->close();
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
