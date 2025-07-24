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
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
        }
        
        /* Hero Section */
        .hero {
            /* background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); */
            background-image:url("https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8d2ViJTIwZGV2fGVufDB8fDB8fHww");
            background-size: cover;
           background-position: center;
            background-repeat: no-repeat;
            color: white;
            color:var(--dark-color);
            height:100vh;
            padding: 100px 0;
            margin-bottom: 60px;
        }
        
        .hero h1 {
            font-weight: 800;
            font-size: 3.5rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
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
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
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
            color: rgba(255,255,255,0.7);
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
            background-color: rgba(255,255,255,0.1);
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
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: rgba(255,255,255,0.5);
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
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="/progetti">Progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contatti">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center ">
            <h1 class="mb-3">Benvenuto nel mio Portfolio</h1>
            
            <div class="mt-5">
                <p class="mb-4">Sviluppatore Web & Designer Creativo</p>
                <a href="#projects" class="btn btn-light btn-lg px-4 me-3">Vedi i miei progetti</a>
                <a href="#contact" class="btn btn-outline-light btn-lg px-4">Contattami</a>
            </div>
        </div>
    </section>

    <!-- Content Section 1 -->
    <section id="about" class="content-section">
        <div class="container">
            <h2 class="section-title">Chi Sono</h2>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://images.unsplash.com/photo-1513789181297-6f2ec112c0bc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFja2VyfGVufDB8fDB8fHww">
                </div>
                <div class="col-md-6">
                    <h3 class="mb-3">La mia storia</h3>
                    <p class="lead">Sono uno sviluppatore web DA OLTRE 5 MINUTI .</p>
                    <p>La mia passione per la tecnologia mi ha portato a specializzarmi in soluzioni front-end che combinano estetica e funzionalità. Credo nell'apprendimento continuo e nel rimanere sempre aggiornato con le ultime tendenze e tecnologie.</p>
                    <p>Nel mio tempo libero, mi piace contribuire a progetti open source e creare applicazioni innovative che risolvono problemi reali.</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary me-2">Scarica CV</a>
                        <a href="#contact" class="btn btn-outline-primary">Contattami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section 2 -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title">Le mie competenze</h2>
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Skills" class="img-fluid section-img">
                </div>
                <div class="col-md-6 order-md-1">
                    <h3 class="mb-3">Tecnologie e strumenti</h3>
                    <div class="skill mb-4">
                        <h5>HTML5, CSS3 & JavaScript</h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 5%">5%</div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <h5>Bootstrap & Tailwind CSS</h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 10%">10%</div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <h5>React & Vue.js</h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 1%">1%</div>
                        </div>
                    </div>
                    
                    <div class="skill mb-4">
                        <h5>UI/UX Design</h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 15%">15%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section 3 -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title">Il mio approccio</h2>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Approach" class="img-fluid section-img">
                </div>
                <div class="col-md-6">
                    <h3 class="mb-3">Design centrato sull'utente</h3>
                    <p>Credo che un design efficace inizi con una profonda comprensione degli utenti e dei loro bisogni. Ogni progetto inizia con una fase di ricerca per garantire che le soluzioni siano non solo esteticamente piacevoli ma anche funzionali e intuitive.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Ricerca e analisi degli utenti</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Prototipazione e testing</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Sviluppo iterativo</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Ottimizzazione per le prestazioni</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Manutenzione e aggiornamenti</li>
                    </ul>
                    <p class="mt-3">Il mio obiettivo è creare esperienze digitali che non solo soddisfino ma superino le aspettative degli utenti, garantendo al contempo scalabilità e manutenibilità a lungo termine.</p>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h5>DevPortfolio</h5>
                    <p class="mt-3">Creiamo esperienze digitali eccezionali che connettono brand e utenti in modi significativi.</p>
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
                <p>&copy; 2023 DevPortfolio. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>

 
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    
    
</body>
</html>