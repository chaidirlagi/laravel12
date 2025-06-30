<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik Sehat Online - Berobat Mudah dari Rumah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color:rgb(29, 42, 63);
            --primary-dark:rgb(32, 66, 255);
            --secondary-color:rgb(212, 96, 96);
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f8fafc;
            --white: #ffffff;
            --gradient-blue: linear-gradient(135deg,rgb(0, 56, 140) 0%,rgb(22, 22, 255) 100%);
            --shadow-light: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-light);
            scroll-behavior: smooth;
            overflow-x: hidden;
            line-height: 1.7;
        }

        /* Navbar Styling */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 10px 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 6px 0;
            box-shadow: var(--shadow-medium);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            background: var(--gradient-blue);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            color: var(--primary-color) !important;
            font-weight: 600;
            margin-left: 15px;
            margin-right: 30px;
            position: relative;
            transition: all 0.3s ease;
            padding: 10px 20px !important;
            border-radius: 25px;
            background: var(--gradient-blue);
            color: white !important;
        }

        .nav-link:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
            background: var(--primary-dark);
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient-blue);
            color: white;
            padding: 150px 0 100px;
            text-align: center;
            position: relative;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-section .subtitle {
            font-size: 1.4rem;
            margin-bottom: 40px;
            opacity: 0.95;
            font-weight: 400;
        }

        .btn-hero {
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            margin: 10px;
            transition: all 0.3s ease;
        }

        .btn-hero-primary {
            background: var(--white);
            color: var(--primary-color);
            border: 2px solid var(--white);
        }

        .btn-hero-primary:hover {
            background: transparent;
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
        }

        .btn-hero-outline {
            background: transparent;
            color: var(--white);
            border: 2px solid rgba(255, 255, 255, 0.8);
        }

        .btn-hero-outline:hover {
            background: var(--white);
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        /* Access Cards Section */
        .access-section {
            padding: 100px 0;
            background: var(--white);
        }

        .access-card {
            background: var(--white);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--shadow-light);
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
        }

        .access-card h4 {
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 20px;
            font-size: 1.4rem;
        }

        .access-card p {
            color: var(--text-light);
            margin-bottom: 30px;
            line-height: 1.7;
            font-size: 1rem;
            font-weight: 500;
        }

        .btn-access {
            background: var(--gradient-blue);
            border: none;
            color: var(--white);
            padding: 14px 35px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
        }

        .btn-access:hover {
            background: var(--primary-dark);
            color: var(--white);
            transform: translateY(-2px);
            text-decoration: none;
            box-shadow: var(--shadow-medium);
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 100px 0;
            background: var(--bg-light);
        }

        .testimonial-card {
            background: var(--white);
            padding: 35px;
            border-radius: 20px;
            box-shadow: var(--shadow-light);
            margin-bottom: 30px;
            transition: all 0.4s ease;
            position: relative;
            height: 100%;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 20px;
            font-size: 4rem;
            color: var(--primary-color);
            opacity: 0.3;
            font-family: serif;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .testimonial-card p {
            font-style: italic;
            color: var(--text-light);
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
            font-size: 1rem;
            line-height: 1.7;
            font-weight: 500;
        }

        .testimonial-card h5 {
            font-weight: 600;
            color: var(--primary-color);
            font-size: 1.1rem;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            color: white;
            padding: 50px 0 30px;
            text-align: center;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        }

        /* Section Titles */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 60px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient-blue);
            border-radius: 2px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            .hero-section .subtitle {
                font-size: 1.2rem;
            }
            .section-title {
                font-size: 2rem;
            }
            .btn-hero {
                padding: 12px 30px;
                font-size: 1rem;
            }
            .access-card {
                margin-bottom: 30px;
            }
            .nav-link {
                margin-left: 10px;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                padding: 120px 0 80px;
            }
            .hero-section h1 {
                font-size: 2rem;
            }
            .access-section {
                padding: 80px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">
                            <i class="fas fa-user-shield me-2"></i>
                            Login Administrator
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Sistem Poliklinik Temu Janji</h1>
            </div>
        </div>
    </section>

    <!-- Access Section -->
    <section class="access-section" id="access">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="access-card">
                        <h4>Registrasi Pasien</h4>
                        <p>Apabila Anda adalah seorang Pasien, silahkan Registrasi terlebih dahulu untuk melakukan pendaftaran sebagai Pasien!.</p>
                        <a href="/register" class="btn-access">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="access-card">
                        <h4>Login Dokter</h4>
                        <p>Apabila Anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk memulai melayani Pasien!.</p>
                        <a href="/login" class="btn-access">
                            Masuk Portal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="container">
            <h2 class="text-center section-title">Testimoni Pasien</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p>Pelayanan yang sangat memuaskan! Dokternya profesional dan ramah. Sistem booking online memudahkan saya untuk membuat janji tanpa harus antri lama. Sangat direkomendasikan untuk semua orang.</p>
                        <h5>
                            <i class="fas fa-user-circle me-2"></i>
                            Centa -Demak
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p>Platform yang sangat inovatif dan mudah digunakan. Konsultasi online sangat membantu terutama saat pandemi. Dokter-dokternya berpengalaman dan selalu memberikan solusi terbaik untuk keluhan kesehatan saya.</p>
                        <h5>
                            <i class="fas fa-user-circle me-2"></i>
                            Reihan -Semarang
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Card hover animations - hanya untuk testimonial card
        document.querySelectorAll('.testimonial-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>