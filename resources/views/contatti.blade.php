<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti - GiuseppeDev</title>
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
        .contact-hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 80px 0 60px;
            margin-bottom: 40px;
        }
        
        .contact-hero h1 {
            font-weight: 800;
            font-size: 2.8rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        
        .contact-section {
            padding: 60px 0;
        }
        
        .contact-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
            height: 100%;
            transition: transform 0.3s ease;
        }
         .contact-card1 {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
            height: 50%;
            transition: transform 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
        }
        
        .contact-icon {
            width: 70px;
            height: 70px;
            background: rgba(67, 97, 238, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-size: 1.8rem;
        }
        
        .contact-form {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
        }
        
        .form-control, .form-select {
            border: 1px solid #e1e5eb;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }
        
        .form-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 8px;
        }
        
        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .contact-map {
            border-radius: 10px;
            overflow: hidden;
            height: 300px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(67, 97, 238, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            color: var(--dark-color);
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-5px);
        }
        
        /* FAQ Section */
        .faq-section {
            background: #f1f4f8;
            padding: 60px 0;
        }
        
        .accordion-button {
            font-weight: 600;
            color: var(--dark-color);
            padding: 20px;
            background: white;
            border-radius: 8px !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .accordion-button:not(.collapsed) {
            background: white;
            color: var(--primary-color);
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .accordion-button:focus {
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }
        
        .accordion-body {
            padding: 20px;
            background: white;
            border-radius: 0 0 8px 8px;
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
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: rgba(255,255,255,0.5);
            font-size: 0.9rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 2.2rem;
            }
            
            .contact-card {
                margin-bottom: 30px;
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
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/progetti">Progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/contatti">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <section class="contact-hero">
        <div class="container text-center">
            <h1 class="mb-3">Contattami</h1>
            <p class="mb-4">Hai un progetto in mente? Scrivimi e discutiamone insieme!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Indirizzo</h4>
                        <p>Via Roma 123, Milano<br>20100, Italia</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h4>Telefono</h4>
                        <p>+39 123 456 7890</p>
                        <p>Lun-Ven: 9:00-18:00</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email</h4>
                        <p>info@giuseppedev.it</p>
                        <p>supporto@giuseppedev.it</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <h3 class="mb-4">Invia un messaggio</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="name" placeholder="Il tuo nome">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="La tua email">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="subject" class="form-label">Oggetto</label>
                                <select class="form-select" id="subject">
                                    <option selected>Scegli un'opzione</option>
                                    <option>Richiesta preventivo</option>
                                    <option>Informazioni progetto</option>
                                    <option>Supporto tecnico</option>
                                    <option>Collaborazione</option>
                                    <option>Altro</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="message" class="form-label">Messaggio</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Scrivi il tuo messaggio qui..."></textarea>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Invia messaggio</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-5">
                    <div class="contact-map mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44781.14341942971!2d9.139212!3d45.4628328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c1493f1275e7%3A0x3cffcd13c6740e8d!2sMilano%20MI!5e0!3m2!1sit!2sit!4v1718794038243!5m2!1sit!2sit" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    
                    <div class="contact-card1">
                        <h4 class="mb-3">Seguimi sui social</h4>
                        <p>Resta aggiornato sui miei ultimi progetti e iniziative</p>
                        
                        <div class="social-icons mt-4">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                        
                        <div class="mt-4">
                            <h5>Orari di ufficio</h5>
                            <p class="mb-1">Lunedì - Venerdì: 9:00 - 18:00</p>
                            <p>Sabato - Domenica: Chiuso</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="text-center mb-5">Domande frequenti</h2>
            
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Quanto tempo richiede lo sviluppo di un progetto?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Il tempo di sviluppo varia in base alla complessità del progetto. Siti web semplici possono essere completati in 2-4 settimane, mentre progetti più complessi possono richiedere 2-6 mesi. Dopo un'analisi iniziale, fornirò una stima precisa dei tempi.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Quali metodi di pagamento accettate?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Accettiamo bonifici bancari, PayPal e carte di credito (Visa, Mastercard). Per progetti di grandi dimensioni, solitamente richiediamo un acconto del 30-50% all'inizio del lavoro, con il saldo alla consegna.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Offrite servizi di manutenzione?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sì, offriamo piani di manutenzione mensili o annuali che includono aggiornamenti di sicurezza, backup regolari, ottimizzazioni delle prestazioni e supporto tecnico. Possiamo personalizzare un piano in base alle esigenze del tuo progetto.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            Lavorate con clienti internazionali?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Assolutamente sì! Abbiamo esperienza nel lavorare con clienti di tutto il mondo. Possiamo comunicare in italiano, inglese e spagnolo. I pagamenti possono essere effettuati in diverse valute e forniamo tutta la documentazione necessaria per transazioni internazionali.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h5>GiuseppeDev</h5>
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
                        <a href="index.html">Home</a>
                        <a href="#about">Chi Sono</a>
                        <a href="#projects">Progetti</a>
                        <a href="#">Contatti</a>
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
                        <p><i class="fas fa-envelope me-2"></i> info@giuseppedev.it</p>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 GiuseppeDev. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    
   
</body>
</html>