<!--?php
/**
 * Hauptseite - Premium Automobilberatung Deutschland
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/config/security.php';
require_once __DIR__ . '/includes/error_handler.php';
require_once __DIR__ . '/includes/functions.php';

// Paginierung
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = ITEMS_PER_PAGE;
$offset = ($page - 1) * $limit;

// Seiten abrufen
$pages = fetchPages($limit, $offset);
$total_count = getTotalPagesCount();
$total_pages = ceil($total_count / $limit);

// Gültige Seitenzahl sicherstellen
if ($page -->
<html>
 <head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
 </head>
 <body>
  $total_pages &amp;&amp; $total_pages &gt; 0) { header('Location: ' . SITE_URL . '/?page=' . $total_pages); exit; } // Marken-Konstanten define('BRAND_NAME', 'AutoExperten'); define('PRIMARY_DOMAIN', 'autoexperten.de'); define('SUPPORT_EMAIL', 'info@' . PRIMARY_DOMAIN); define('COMPANY_ADDRESS', 'Berliner Straße 45, 10713 Berlin, Deutschland'); define('COMPANY_PHONE', '+49 30 12345678'); $page_data = [ 'title' =&gt; 'Exklusive Automobilberatung &amp; Premium Fahrzeugservice', 'description' =&gt; 'Ihr Experte für Luxusfahrzeuge in Deutschland. Premium Beratung, Ankauf &amp; Verkauf von hochwertigen Automobilen. Maßgeschneiderte Lösungen für anspruchsvolle Kunden.', 'keywords' =&gt; 'Premium Automobile, Luxusfahrzeuge, Fahrzeugberatung, Autoankauf, Autoverkauf, Deutschland, Berlin' ]; include __DIR__ . '/includes/header.php'; ?&gt; <!-- Strukturierte Daten -->
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">
     <!-- Navbar -->
     <nav class="navbar navbar-expand-md sticky-top bg-white border-bottom" role="navigation" aria-label="Hauptnavigation">
      <div class="container">
       <a class="navbar-brand" href="/" aria-label="&lt;?php echo BRAND_NAME; ?&gt; - Zur Startseite"> 
        <svg class="ratio ratio-1x1" width="40" height="40" viewBox="0 0 40 40" fill="none">
         <rect width="40" height="40" rx="8" fill="#2D2D2D" /> <path d="M12 16L20 12L28 16V28H12V16Z" fill="#F8BBD9" />
        </svg> 
        <span class="ms-2 fw-bold text-dark"><!--?php echo BRAND_NAME; ?--></span> 
       </a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Navigation umschalten"><span class="navbar-toggler-icon"></span></button>
       <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav me-auto">
         <li class="nav-item"><a class="nav-link" href="/" aria-current="page">Startseite</a></li>
         <li class="nav-item"><a class="nav-link" href="/about">Über uns</a></li>
         <li class="nav-item"><a class="nav-link" href="/services">Leistungen</a></li>
         <li class="nav-item"><a class="nav-link" href="/careers">Karriere</a></li>
         <li class="nav-item"><a class="nav-link" href="/privacy">Datenschutz</a></li>
        </ul>
        <a class="btn btn-primary" href="#contact-form" role="button">Kostenlose Beratung</a>
       </div>
      </div>
     </nav>
    </div>
   </div>
  </div>
  <main role="main">
   <!-- Hero Section -->
   <section class="py-5" style="background: linear-gradient(135deg, #2D2D2D, #4A4A4A); color: white;">
    <div class="container text-center py-md-5">
     <div class="row justify-content-center">
      <div class="col-lg-10">
       <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Exklusive Automobilberatung für anspruchsvolle Kunden</h1>
       <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Vertrauen Sie auf über 20 Jahre Erfahrung im Premium-Automobilsegment. Wir bieten maßgeschneiderte Lösungen für Luxusfahrzeuge, professionelle Bewertungen und diskrete Abwicklung.</p>
       <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <a href="#contact-form" class="btn btn-lg btn-outline-light">Jetzt beraten lassen</a> <a href="#leistungen" class="btn btn-lg" style="background: #F8BBD9; color: #2D2D2D;">Unsere Leistungen</a>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Features Section -->
   <section id="leistungen" class="py-4 py-md-5" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row text-center mb-5">
      <div class="col-12">
       <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Unsere Premium-Leistungen</h2>
       <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Kompetente Beratung und Service rund um Ihr Traumfahrzeug</p>
      </div>
     </div>
     <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="100">
       <div class="card h-100 d-flex flex-column border-0 shadow-sm">
        <div class="ratio ratio-16x9">
         <img src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?w=400&amp;h=250&amp;fit=crop" class="card-img-top" alt="Fahrzeugbewertung" loading="lazy" style="object-fit: cover;">
        </div>
        <div class="card-body d-flex flex-column">
         <h4 class="card-title">Professionelle Fahrzeugbewertung</h4>
         <p class="card-text flex-grow-1">Exakte Wertermittlung Ihres Fahrzeugs durch zertifizierte Gutachter. Transparente Bewertung nach aktuellen Marktstandards.</p>
         <a href="#contact-form" class="btn btn-primary mt-auto">Bewertung anfordern</a>
        </div>
       </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="200">
       <div class="card h-100 d-flex flex-column border-0 shadow-sm">
        <div class="ratio ratio-16x9">
         <img src="https://images.unsplash.com/photo-1572297517440-eb56dff8ee9e?w=400&amp;h=250&amp;fit=crop" class="card-img-top" alt="Luxusauto Ankauf" loading="lazy" style="object-fit: cover;">
        </div>
        <div class="card-body d-flex flex-column">
         <h4 class="card-title">Ankauf &amp; Verkauf</h4>
         <p class="card-text flex-grow-1">Diskrete Abwicklung beim Kauf und Verkauf von Luxusfahrzeugen. Faire Preise und professionelle Begleitung des gesamten Prozesses.</p>
         <a href="#contact-form" class="btn btn-primary mt-auto">Angebot erhalten</a>
        </div>
       </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="300">
       <div class="card h-100 d-flex flex-column border-0 shadow-sm">
        <div class="ratio ratio-16x9">
         <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=400&amp;h=250&amp;fit=crop" class="card-img-top" alt="Beratungsservice" loading="lazy" style="object-fit: cover;">
        </div>
        <div class="card-body d-flex flex-column">
         <h4 class="card-title">Individuelle Beratung</h4>
         <p class="card-text flex-grow-1">Persönliche Beratung bei der Auswahl Ihres Traumfahrzeugs. Berücksichtigung Ihrer individuellen Wünsche und Anforderungen.</p>
         <a href="#contact-form" class="btn btn-primary mt-auto">Beratung buchen</a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- About Section -->
   <section class="py-4 py-md-5" style="background-color: #F8F9FA;">
    <div class="container">
     <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
       <h2 class="display-6 fw-bold mb-4">Warum <!--?php echo BRAND_NAME; ?-->?</h2>
       <p class="lead mb-4">Mit über zwei Jahrzehnten Erfahrung im Premium-Automobilsegment sind wir Ihr vertrauensvoller Partner für alle Belange rund um Luxusfahrzeuge.</p>
       <div class="row g-3">
        <div class="col-sm-6">
         <div class="d-flex align-items-center">
          <div class="ratio ratio-1x1 me-3" style="width: 48px;">
           <svg viewBox="0 0 24 24" fill="#F8BBD9">
            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
           </svg>
          </div>
          <div>
           <h5 class="mb-1">20+ Jahre Erfahrung</h5>
           <small class="text-muted">Im Premium-Segment</small>
          </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="d-flex align-items-center">
          <div class="ratio ratio-1x1 me-3" style="width: 48px;">
           <svg viewBox="0 0 24 24" fill="#F8BBD9">
            <path d="M9 12L11 14L15 10M21 12C21 16.97 16.97 21 12 21C7.03 21 3 16.97 3 12C3 7.03 7.03 3 12 3C16.97 3 21 7.03 21 12Z" />
           </svg>
          </div>
          <div>
           <h5 class="mb-1">Zertifizierte Gutachter</h5>
           <small class="text-muted">Professionelle Bewertung</small>
          </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="d-flex align-items-center">
          <div class="ratio ratio-1x1 me-3" style="width: 48px;">
           <svg viewBox="0 0 24 24" fill="#F8BBD9">
            <path d="M12 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21.74 21 16.55 21 11V5L12 1Z" />
           </svg>
          </div>
          <div>
           <h5 class="mb-1">Diskrete Abwicklung</h5>
           <small class="text-muted">Vertraulichkeit garantiert</small>
          </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="d-flex align-items-center">
          <div class="ratio ratio-1x1 me-3" style="width: 48px;">
           <svg viewBox="0 0 24 24" fill="#F8BBD9">
            <path d="M17 21V19H7V21H5V19H3V17H5V7C5 5.9 5.9 5 7 5H17C18.1 5 19 5.9 19 7V17H21V19H19V21H17Z" />
           </svg>
          </div>
          <div>
           <h5 class="mb-1">Deutschlandweit</h5>
           <small class="text-muted">Service vor Ort</small>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
       <div class="ratio ratio-4x3">
        <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=600&amp;h=450&amp;fit=crop" class="img-fluid rounded" alt="Luxusautos Showroom" loading="lazy" style="object-fit: cover;">
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Contact Form Section -->
   <section id="contact-form" class="py-4 py-md-5" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-lg-8">
       <div class="text-center mb-5">
        <h2 class="display-6 fw-bold mb-3" data-aos="fade-up">Kostenlose Beratung anfragen</h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Lassen Sie sich unverbindlich von unseren Experten beraten</p>
       </div>
       <form class="needs-validation" novalidate data-aos="fade-up" data-aos-delay="200">
        <div class="row g-3">
         <div class="col-md-6">
          <label for="firstName" class="form-label">Vorname *</label> <input type="text" class="form-control" id="firstName" name="firstName" required>
          <div class="invalid-feedback">Bitte geben Sie Ihren Vornamen ein.</div>
         </div>
         <div class="col-md-6">
          <label for="lastName" class="form-label">Nachname *</label> <input type="text" class="form-control" id="lastName" name="lastName" required>
          <div class="invalid-feedback">Bitte geben Sie Ihren Nachnamen ein.</div>
         </div>
         <div class="col-md-6">
          <label for="email" class="form-label">E-Mail *</label> <input type="email" class="form-control" id="email" name="email" required>
          <div class="invalid-feedback">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
         </div>
         <div class="col-md-6">
          <label for="phone" class="form-label">Telefon</label> <input type="tel" class="form-control" id="phone" name="phone">
         </div>
         <div class="col-12">
          <label for="service" class="form-label">Gewünschte Leistung *</label> <select class="form-select" id="service" name="service" required> <option value="">Bitte wählen...</option> <option value="bewertung">Fahrzeugbewertung</option> <option value="ankauf">Fahrzeugankauf</option> <option value="verkauf">Fahrzeugverkauf</option> <option value="beratung">Allgemeine Beratung</option> </select>
          <div class="invalid-feedback">Bitte wählen Sie eine Leistung aus.</div>
         </div>
         <div class="col-12">
          <label for="message" class="form-label">Nachricht *</label> <textarea class="form-control" id="message" name="message" rows="4" required placeholder="Beschreiben Sie Ihr Anliegen..."></textarea>
          <div class="invalid-feedback">Bitte geben Sie eine Nachricht ein.</div>
         </div>
         <div class="col-12">
          <div class="form-check">
           <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required> <label class="form-check-label" for="privacy"> Ich stimme der Verarbeitung meiner Daten gemäß der <a href="/privacy" target="_blank">Datenschutzerklärung</a> zu. * </label>
           <div class="invalid-feedback">Sie müssen der Datenschutzerklärung zustimmen.</div>
          </div>
         </div>
         <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary btn-lg w-100 w-md-auto px-5">Anfrage senden</button>
          <p class="mt-2 text-muted small">Wir melden uns innerhalb von 24 Stunden bei Ihnen</p>
         </div>
        </div>
       </form>
      </div>
     </div>
    </div>
   </section>
  </main>
  <!-- Footer -->
  <!-- Bootstrap JS -->
  <!-- AOS Animation Library -->
  <script>
// AOS Initialisierung
AOS.init({
    once: false,
    duration: 600,
    easing: 'ease-out',
    offset: 120,
    mirror: false
});

// Form Validation
(function() {
    'use strict';
    
    var forms = document.querySelectorAll('.needs-validation');
    
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
})();

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');
        if (targetId !== '#' && document.querySelector(targetId)) {
            e.preventDefault();
            document.querySelector(targetId).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>
  <footer class="bg-dark text-light py-4 py-md-5" role="contentinfo">
   <div class="container">
    <div class="row g-4">
     <div class="col-lg-4">
      <div class="d-flex align-items-center mb-3">
       <svg class="ratio ratio-1x1 me-2" width="32" height="32" viewBox="0 0 40 40" fill="none">
        <rect width="40" height="40" rx="8" fill="#F8BBD9" /> <path d="M12 16L20 12L28 16V28H12V16Z" fill="#2D2D2D" />
       </svg>
       <h5 class="mb-0"><!--?php echo BRAND_NAME; ?--></h5>
      </div>
      <p class="text-muted">Ihr vertrauensvoller Partner für Premium-Automobile in Deutschland.</p>
      <div class="d-flex gap-3">
       <a href="https://facebook.com" class="text-light" aria-label="Facebook"> 
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
         <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
        </svg> 
       </a> <a href="https://linkedin.com" class="text-light" aria-label="LinkedIn"> 
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
         <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
        </svg> 
       </a>
      </div>
     </div>
     <div class="col-lg-2 col-md-3">
      <h6 class="text-uppercase fw-bold mb-3">Navigation</h6>
      <ul class="list-unstyled">
       <li class="mb-2"><a href="/" class="text-muted text-decoration-none">Startseite</a></li>
       <li class="mb-2"><a href="/about" class="text-muted text-decoration-none">Über uns</a></li>
       <li class="mb-2"><a href="/services" class="text-muted text-decoration-none">Leistungen</a></li>
       <li class="mb-2"><a href="/careers" class="text-muted text-decoration-none">Karriere</a></li>
      </ul>
     </div>
     <div class="col-lg-3 col-md-4">
      <h6 class="text-uppercase fw-bold mb-3">Kontakt</h6>
      <address class="text-muted small">
       <div class="mb-2">
        <!--?php echo COMPANY_ADDRESS; ?-->
       </div>
       <div class="mb-2">
        Telefon: <a href="tel:&lt;?php echo str_replace(' ', '', COMPANY_PHONE); ?&gt;" class="text-muted"><!--?php echo COMPANY_PHONE; ?--></a>
       </div>
       <div>
        E-Mail: <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-muted"><!--?php echo SUPPORT_EMAIL; ?--></a>
       </div>
      </address>
     </div>
     <div class="col-lg-3 col-md-5">
      <h6 class="text-uppercase fw-bold mb-3">Rechtliches</h6>
      <ul class="list-unstyled">
       <li class="mb-2"><a href="/privacy" class="text-muted text-decoration-none">Datenschutzerklärung</a></li>
       <li class="mb-2"><a href="/impressum" class="text-muted text-decoration-none">Impressum</a></li>
       <li class="mb-2"><a href="/agb" class="text-muted text-decoration-none">AGB</a></li>
      </ul>
     </div>
    </div>
    <hr class="my-4">
    <div class="row align-items-center">
     <div class="col-md-6">
      <p class="text-muted small mb-0">© <!--?php echo date('Y'); ?--> <!--?php echo BRAND_NAME; ?-->. Alle Rechte vorbehalten.</p>
     </div>
     <div class="col-md-6 text-md-end">
      <p class="text-muted small mb-0">Entwickelt mit ❤️ in Deutschland</p>
     </div>
    </div>
   </div>
  </footer>
  <script src="script.js" defer></script>
 </body>
</html>