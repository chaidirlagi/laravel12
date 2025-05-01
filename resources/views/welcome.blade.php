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
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
     <style>
         body {
            font-family: 'Poppins', sans-serif;
             background-color: #f8f9fa;
             scroll-behavior: smooth;
         }
         /* Navbar Styling */
         .navbar {
             background-color: #ffffff;
             box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
             padding: 15px 0;
         }
         .navbar-brand {
             font-weight: 700;
             font-size: 1.8rem;
             color: #007bff !important;
         }
         .nav-link {
             color: #333 !important;
             font-weight: 500;
             margin-left: 20px;
             transition: color 0.3s ease;
         }
         .nav-link:hover {
             color: #007bff !important;
         }
         .btn-login {
             background-color: #007bff;
             color: white;
             border-radius: 20px;
             padding: 8px 20px;
             font-weight: 500;
             transition: background-color 0.3s ease;
         }
         .btn-login:hover {
             background-color: #0056b3;
             color: white;
         }
         /* Hero Section */
         .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1584982751601-97dcc096659c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
             background-position: center;
             color: white;
             padding: 120px 0;
             text-align: center;
             position: relative;
             overflow: hidden;
         }
         .hero-section h1 {
            font-size: 3.5rem;
             font-weight: 700;
             animation: fadeInDown 1s ease;
         }
         .hero-section p {
            font-size: 1.3rem;
             margin-bottom: 30px;
             animation: fadeInUp 1s ease 0.3s;
             animation-fill-mode: both;
         }
         .btn-primary {
             background-color: #007bff;
             border: none;
             padding: 12px 35px;
             font-size: 1.2rem;
             border-radius: 25px;
             transition: transform 0.3s ease, background-color 0.3s ease;
         }
         .btn-primary:hover {
             background-color: #0056b3;
             transform: translateY(-3px);
         }
         /* Features Section */
         .features-section {
            padding: 80px 0;
             background-color: #fff;
         }
         .feature-card {
             text-align: center;
             padding: 30px;
             border-radius: 15px;
             box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
             margin-bottom: 30px;
             transition: transform 0.3s ease;
         }
         .feature-card:hover {
             transform: translateY(-10px);
         }
         .feature-card i {
             color: #007bff;
             margin-bottom: 20px;
         }
         .feature-card h4 {
             font-weight: 600;
             color: #333;
         }
         /* Testimonials Section */
         .testimonials-section {
            padding: 80px 0;
             background-color: #f8f9fa;
         }
         .testimonial-card {
             background: white;
             padding: 25px;
             border-radius: 15px;
             box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
             margin-bottom: 30px;
             transition: transform 0.3s ease;
         }
         .testimonial-card:hover {
             transform: translateY(-10px);
         }
         .testimonial-card p {
             font-style: italic;
             color: #555;
         }
         .testimonial-card h5 {
             font-weight: 600;
             color: #007bff;
         }
         /* Contact Section */
         .contact-section {
            padding: 80px 0;
             background-color: #fff;
         }
         .contact-section .form-control {
            margin-bottom: 20px;
             border-radius: 10px;
             padding: 12px;
             border: 1px solid #ced4da;
             transition: border-color 0.3s ease;
         }
         .contact-section .form-control:focus {
             border-color: #007bff;
             box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
         }
         /* Footer */
         footer {
             background-color: #343a40;
             color: white;
             padding: 30px 0;
             text-align: center;
         }
         footer p {
             margin: 0;
             font-size: 0.9rem;
         }
         /* Animations */
         @keyframes fadeInDown {
             from {
                 opacity: 0;
                 transform: translateY(-20px);
             }
             to {
                 opacity: 1;
                 transform: translateY(0);
             }
         }
         @keyframes fadeInUp {
             from {
                 opacity: 0;
                 transform: translateY(20px);
             }
             to {
                 opacity: 1;
                 transform: translateY(0);
             }
         }
         /* Responsive Design */
         @media (max-width: 768px) {
             .hero-section h1 {
                font-size: 2.5rem;
             }
             .hero-section p {
                font-size: 1.1rem;
             }
             .navbar-brand {
                 font-size: 1.5rem;
             }
             .nav-link {
                 margin-left: 0;
                 margin-top: 10px;
             }
         }
     </style>
 </head>
 <body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light fixed-top">
         <div class="container">
             <a class="navbar-brand" href="#">Poliklinik Sehat Online</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                         <a class="nav-link" href="#home">Beranda</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#features">Fitur</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#testimonials">Testimoni</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#contact">Kontak</a>
                     </li>
                     <li class="nav-item">
                         <a href="/login" class="btn btn-login">Login</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 
     <!-- Hero Section -->
     <section class="hero-section" id="home">
         <div class="container">
             <h1>Poliklinik Sehat Online</h1>
             <p>Berobat Mudah dari Rumah dengan Konsultasi Dokter Online</p>
             <a href="#contact" class="btn btn-primary">Buat Janji Sekarang</a>
         </div>
     </section>
 
     <!-- Features Section -->
     <section class="features-section" id="features">
         <div class="container">
             <h2 class="text-center mb-5">Mengapa Memilih Kami?</h2>
             <div class="row">
                 <div class="col-md-4">
                     <div class="feature-card">
                     <i class="fas fa-video fa-3x mb-3"></i>
                         <h4>Konsultasi Online</h4>
                         <p>Bertemu dokter profesional melalui video call dari kenyamanan rumah Anda.</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="feature-card">
                     <i class="fas fa-calendar-check fa-3x mb-3"></i>
                         <h4>Jadwal Fleksibel</h4>
                         <p>Pilih waktu konsultasi yang sesuai dengan jadwal Anda.</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="feature-card">
                     <i class="fas fa-prescription fa-3x mb-3"></i>
                         <h4>Resep Digital</h4>
                         <p>Dapatkan resep obat digital yang dikirim langsung ke ponsel Anda.</p>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 
     <!-- Testimonials Section -->
     <section class="testimonials-section" id="testimonials">
         <div class="container">
             <h2 class="text-center mb-5">Apa Kata Pasien Kami</h2>
             <div class="row">
                 <div class="col-md-4">
                     <div class="testimonial-card">
                         <p>"Konsultasi online sangat membantu! Dokternya ramah dan prosesnya cepat."</p>
                         <h5>- Ani, 34 tahun</h5>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="testimonial-card">
                         <p>"Saya bisa buat janji kapan saja, sangat praktis untuk ibu bekerja seperti saya."</p>
                         <h5>- Budi, 40 tahun</h5>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="testimonial-card">
                         <p>"Resep digital langsung dikirim ke apotek, sangat efisien!"</p>
                         <h5>- Citra, 28 tahun</h5>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 
     <!-- Contact Section -->
     <section class="contact-section" id="contact">
         <div class="container">
             <h2 class="text-center mb-5">Hubungi Kami</h2>
             <div class="row">
                 <div class="col-md-6 mx-auto">
                     <form action="/submit" method="POST">
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                         </div>
                         <div class="form-group">
                             <input type="email" class="form-control" placeholder="Email" required>
                         </div>
                         <div class="form-group">
                             <input type="tel" class="form-control" placeholder="Nomor Telepon" required>
                         </div>
                         <div class="form-group">
                             <textarea class="form-control" rows="4" placeholder="Pesan atau Pertanyaan" required></textarea>
                         </div>
                         <button type="submit" class="btn btn-primary w-100">Kirim</button>
                     </form>
                 </div>
             </div>
         </div>
     </section>
 
     <!-- Footer -->
     <footer>
         <div class="container">
         <p>© 2025 Poliklinik Sehat Online. Semua hak dilindungi.</p>
         </div>
     </footer>
 
     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 </body>