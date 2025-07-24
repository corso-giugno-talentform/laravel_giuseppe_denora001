<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Mio Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --dark-color: #1d3557;
            --light-color: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            padding-top: 56px;
        }


        .navbar {
            background-color: var(--dark-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0;
            margin-bottom: 60px;
        }

        .hero h1 {
            font-weight: 800;
            font-size: 3.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero p {
            font-size: 1.4rem;
            opacity: 0.9;
        }

        /* Content Sections */
        .content-section {
            padding: 60px 0;
        }

        .content-section:nth-child(odd) {
            background-color: var(--light-color);
        }

        .content-section:nth-child(even) {
            background-color: white;
        }

        .section-img {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .section-img:hover {
            transform: translateY(-5px);
        }

        .section-title {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 70px;
            height: 4px;
            background-color: var(--accent-color);
            border-radius: 2px;
        }

        /* Cards Section */
        .cards-section {
            padding: 80px 0;
            background-color: #f1f4f8;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            color: var(--dark-color);
            font-weight: 700;
        }

        .card-text {
            color: #666;
        }

        /* Footer */
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 60px 0 20px;
        }

        .footer h5 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--accent-color);
            padding-left: 5px;
        }

        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background-color: var(--accent-color);
            transform: translateY(-5px);
        }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            text-decoration: none;
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-to-top.show {
            opacity: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .section-title {
                text-align: center;
            }

            .section-title::after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-code me-2"></i>GiuseppeDev
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                        <a class="nav-link active" href="{{ route('homepage') }}">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects') }}">Progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    <!-- Cards Section PROGETTI-->
    <section id="projects" class="cards-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">I miei progetti</h2>
            <div class="row">
                <!-- Card dinamica -->
                @foreach ($projects as $project)
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            {{-- <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                                class="card-img-top" alt="Project Image"> --}}
                                <img src="{{ $project['immagine'] }}" alt="{{ $project['nome'] }}" class="img-fluid project-img">
                            <div class="card-body">
                                <h2>{{ $project['nome'] }}</h2>
                                <p>{{ $project['descrizione'] }}</p>
                                
                                <a href="/progetti/{{ $project['slug'] }}" class="btn btn-primary mt-auto">Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach

      
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h5>DevPortfolio</h5>
                    <p class="mt-3">Creiamo esperienze digitali eccezionali che connettono brand e utenti in modi
                        significativi.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 mb-5 mb-md-0">
                    <h5>Link Utili</h5>
                    <div class="footer-links mt-4">
                        <a href="#">Home</a>
                        <a href="#about">Chi Sono</a>
                        <a href="#projects">Progetti</a>
                        <a href="#contact">Contatti</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
                    <h5>Servizi</h5>
                    <div class="footer-links mt-4">
                        <a href="#">Sviluppo Web</a>
                        <a href="#">UI/UX Design</a>
                        <a href="#">Applicazioni Mobile</a>
                        <a href="#">Consulenza Digitale</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <h5>Contatti</h5>
                    <div class="mt-4">
                        <p><i class="fas fa-map-marker-alt me-2"></i> Via Roma 123, Milano</p>
                        <p><i class="fas fa-phone me-2"></i> +39 123 456 7890</p>
                        <p><i class="fas fa-envelope me-2"></i> info@devportfolio.it</p>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2025 GiuseppeDev. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
