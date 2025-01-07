<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Balance by Erik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">New Balance</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <form class="d-flex me-2">
            <input class="form-control" type="search" placeholder="Cari...">
        </form>
        <div class="d-flex align-items-center">
            <a href="Masuk" class="text-light me-2">Masuk | Daftar</a>
            <a href="Daftar" class="text-light">
                <i class="bi bi-cart"></i>
            </a>
        </div>
    </div>
</div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="col-md-6">
                    <h1>Welcome to NEW BALANCE</h1>
                    <p>Discover our amazing products and services</p>
                    <a href="#contact" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Profile Section -->
    <section id="About" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">About</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="img/logonew.png" alt="Company About" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <p class="fs-4">Founded in 1906 by William J. Riley in Boston, Massachusetts,
                        New Balance began as an arch support company.
                        Through innovation and unwavering commitment to quality,
                        we've evolved into a global leader in athletic footwear and apparel.</p>
                    <ul>
                        <li>Integrity in everything we do</li>
                        <li>Commitment to quality craftsmanship</li>
                        <li>Innovation in design and technology</li>
                    </ul>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,64L18.5,58.7C36.9,53,74,43,111,53.3C147.7,64,185,96,222,112C258.5,128,295,128,332,133.3C369.2,139,406,149,443,165.3C480,181,517,203,554,181.3C590.8,160,628,96,665,80C701.5,64,738,96,775,96C812.3,96,849,64,886,80C923.1,96,960,160,997,160C1033.8,160,1071,96,1108,101.3C1144.6,107,1182,181,1218,197.3C1255.4,213,1292,171,1329,144C1366.2,117,1403,107,1422,101.3L1440,96L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="service-card">
                        <img src="img/warranty.png" class="card-img-top col-md-3" alt="Service 1">
                        <div class="card-body">
                            <h5 class="service-card-text">Garansi Produk</h5>
                            <p class="service-card-description">Kami memberikan jaminan kualitas untuk setiap sepatu New Balance. Jika ada kerusakan pabrikasi dalam 30 hari, kami akan menukarnya dengan produk baru.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="service-card">
                        <img src="img/shipping.png" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="service-card-text">Pengiriman Cepat</h5>
                            <p class="service-card-description">Barang sampai dalam 1-3 hari kerja untuk wilayah utama, dengan biaya pengiriman yang terjangkau.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card">
                        <img src="img/return.png" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="service-card-text">Return</h5>
                            <p class="service-card-description">Bebas retur dalam 14 hari jika produk tidak sesuai harapan. Syarat dan ketentuan berlaku.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="service-card">
                        <img src="img/paper-plane.png" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="service-card-text">Layanan Konsumen</h5>
                <p class="service-card-description">
                    Tim customer service kami siap membantu Anda 24/7 melalui live chat, email, dan telepon.
                </p>
                        </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="product" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">product</h2>
            <div class="row" id="galleryImages">
                
                <!-- Gallery images will be loaded here via JavaScript -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form id="contactForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h4>My Location</h4>
                    <p>433 Street Name, City, IND</p>
                    <p>Email: eriksuroso235@gmail.com</p>
                    <p>Phone: +6288216635472</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>New Balance</h5>
                    <p>Your trusted partner in business</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; 2024 Company Name. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>