<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatvrahman Trip - Sistem Pemesanan Tiket</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
    <link rel="stylesheet" href="../assets/styles/styles.css"> <!-- Link ke file CSS terpisah -->
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Fatvrahman Trip</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Destinasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tiket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Daftar</a>
                </li>
            </ul>
            <button class="btn btn-outline-primary ml-3">Sign Up</button>
        </div>
    </nav>

    <!-- Header -->
    <header>
        <div class="overlay"></div>
        <h1>Pesan Tiket Perjalanan Anda dengan Mudah</h1>
        <p>Jutaan perjalanan siap menanti Anda!</p>
        <div class="search-bar">
            <input type="text" placeholder="Tujuan">
            <input type="text" id="berangkat" placeholder="Tanggal Berangkat" onfocus="(this.type='date')" onblur="(this.type='text')">
            <input type="text" id="pulang" placeholder="Tanggal Pulang" onfocus="(this.type='date')" onblur="(this.type='text')">
            <button>Cari</button>
        </div>
    </header>

    <!-- Popular Destinations -->
    <section class="popular-destinations">
        <h2>Destinasi Populer</h2>
        <div class="container">
            <div class="destinations-grid">
                <div class="destination">
                    <img src="bali.jpg" alt="Bali">
                    <div class="destination-info">Bali</div>
                </div>
                <div class="destination">
                    <img src="jakarta.jpg" alt="Jakarta">
                    <div class="destination-info">Jakarta</div>
                </div>
                <div class="destination">
                    <img src="yogyakarta.jpg" alt="Yogyakarta">
                    <div class="destination-info">Yogyakarta</div>
                </div>
                <div class="destination">
                    <img src="bandung.jpg" alt="Bandung">
                    <div class="destination-info">Bandung</div>
                </div>
                <div class="destination">
                    <img src="surabaya.jpg" alt="Surabaya">
                    <div class="destination-info">Surabaya</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Sistem Pemesanan Tiket. Semua hak dilindungi.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
