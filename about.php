<!--?php
/**
 * About Page - Über uns
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/config/security.php';
require_once __DIR__ . '/includes/error_handler.php';
require_once __DIR__ . '/includes/functions.php';

// Brand constants
define('BRAND_NAME', 'AutoExpert Deutschland');
define('PRIMARY_DOMAIN', 'autoexpert-de.com');
define('SUPPORT_EMAIL', 'info@' . PRIMARY_DOMAIN);
define('COMPANY_ADDRESS', 'Musterstraße 123, 10115 Berlin, Deutschland');
define('COMPANY_PHONE', '+49 30 12345678');

$page_data = [
    'title' =-->
<html>
 <head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
 </head>
 <body>
  'Über uns', 'description' =&gt; 'Erfahren Sie mehr über ' . BRAND_NAME . ' - Ihr vertrauensvoller Partner für Automobildienstleistungen in Deutschland. Unser Team aus erfahrenen Experten steht Ihnen mit Leidenschaft und Kompetenz zur Seite.', 'keywords' =&gt; 'über uns, team, automobilexperten, deutschland, erfahrung, vertrauen', 'author_name' =&gt; BRAND_NAME ]; // Generate breadcrumbs $breadcrumbs = [ ['url' =&gt; '/', 'text' =&gt; 'Startseite'], ['url' =&gt; '/about.php', 'text' =&gt; 'Über uns'] ]; include __DIR__ . '/includes/header.php'; ?&gt;
  <div class="container-fluid">
   <nav aria-label="breadcrumb" class="py-3">
    <div class="container">
     <ol class="breadcrumb mb-0">
      <!--?php foreach ($breadcrumbs as $index =-->
      $crumb): ?&gt;
      <li class="breadcrumb-item &lt;?php echo $index === count($breadcrumbs) - 1 ? 'active' : ''; ?&gt;"><!--?php if ($index < count($breadcrumbs) - 1): ?--> <a href="&lt;?php echo escapeHTML($crumb['url']); ?&gt;"><!--?php echo escapeHTML($crumb['text']); ?--></a> <!--?php else: ?--> <span><!--?php echo escapeHTML($crumb['text']); ?--></span> <!--?php endif; ?--></li>
      <!--?php endforeach; ?-->
     </ol>
    </div>
   </nav>
   <!-- Hero Section -->
   <section class="hero-section bg-dark text-white py-5" style="scroll-margin-top: var(--nav-h);" id="hero" data-aos="fade-up">
    <div class="container">
     <div class="row align-items-center min-vh-50">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
       <h1 class="display-3 fw-bold mb-4"><!--?php echo BRAND_NAME; ?--></h1>
       <p class="lead mb-4">Ihr vertrauensvoller Partner für Automobildienstleistungen in Deutschland. Mit über einem Jahrzehnt Erfahrung bieten wir Ihnen erstklassigen Service und innovative Lösungen.</p>
       <div class="d-flex flex-wrap gap-3">
        <a href="#team" class="btn btn-primary btn-lg">Unser Team</a> <a href="#contact-info" class="btn btn-outline-light btn-lg">Kontakt</a>
       </div>
      </div>
      <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-delay="200">
       <div class="ratio ratio-4x3">
        <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=1200&amp;h=800&amp;q=80" alt="Moderne Autowerkstatt" class="img-fluid rounded-3 shadow-lg" loading="lazy" width="600" height="400">
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Company Story Section -->
   <section class="py-5 bg-light" id="story" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row">
      <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up">
       <h2 class="display-5 fw-bold mb-4">Unsere Geschichte</h2>
       <p class="lead text-muted">Von der Vision zur Realität - wie wir zu Deutschlands führendem Automobilexperten wurden</p>
      </div>
     </div>
     <div class="row align-items-center">
      <div class="col-lg-6 mb-4" data-aos="fade-right">
       <div class="ratio ratio-16x9">
        <img src="https://images.unsplash.com/photo-1486312338219-ce68e2c6b7c0?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=800&amp;h=600&amp;q=80" alt="Gründer des Unternehmens" class="img-fluid rounded-3 shadow" loading="lazy" width="800" height="600">
       </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
       <h3 class="h2 mb-4">Eine Leidenschaft für Perfektion</h3>
       <p class="mb-4">Gegründet im Jahr 2012 mit der Vision, die Automobilbranche durch innovative Lösungen und erstklassigen Service zu revolutionieren. Was mit einem kleinen Team von drei Personen begann, hat sich zu einem führenden Unternehmen mit über 50 Mitarbeitern entwickelt.</p>
       <div class="row g-3 mb-4">
        <div class="col-sm-6">
         <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
           <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
            <span class="fw-bold">12+</span>
           </div>
          </div>
          <div class="flex-grow-1 ms-3">
           <h5 class="mb-1">Jahre Erfahrung</h5>
           <p class="mb-0 text-muted small">In der Automobilbranche</p>
          </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
           <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
            <span class="fw-bold">50+</span>
           </div>
          </div>
          <div class="flex-grow-1 ms-3">
           <h5 class="mb-1">Mitarbeiter</h5>
           <p class="mb-0 text-muted small">Erfahrene Experten</p>
          </div>
         </div>
        </div>
       </div>
       <p class="mb-0">Heute sind wir stolz darauf, über 10.000 zufriedene Kunden betreut und mehr als 25.000 Fahrzeuge erfolgreich gewartet zu haben. Unser Erfolg basiert auf drei Säulen: Qualität, Zuverlässigkeit und Innovation.</p>
      </div>
     </div>
    </div>
   </section>
   <!-- Values Section -->
   <section class="py-5" id="values" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row">
      <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up">
       <h2 class="display-5 fw-bold mb-4">Unsere Werte</h2>
       <p class="lead text-muted">Die Prinzipien, die unser tägliches Handeln leiten</p>
      </div>
     </div>
     <div class="row g-4">
      <div class="col-md-4" data-aos="flip-left" data-aos-delay="100">
       <div class="card h-100 border-0 shadow-sm text-center">
        <div class="card-body d-flex flex-column p-4">
         <div class="ratio ratio-1x1 mb-4" style="width: 80px; margin: 0 auto;">
          <svg viewBox="0 0 24 24" fill="none" class="text-primary">
           <path stroke="currentColor" stroke-width="2" d="M12 2L14.09 8.26L22 9L16 14.74L17.18 22L12 18.27L6.82 22L8 14.74L2 9L9.91 8.26L12 2Z" />
          </svg>
         </div>
         <h4 class="h5 mb-3">Qualität</h4>
         <p class="text-muted mb-0">Höchste Standards in allen unseren Dienstleistungen. Jedes Detail wird mit Präzision und Sorgfalt behandelt.</p>
        </div>
       </div>
      </div>
      <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
       <div class="card h-100 border-0 shadow-sm text-center">
        <div class="card-body d-flex flex-column p-4">
         <div class="ratio ratio-1x1 mb-4" style="width: 80px; margin: 0 auto;">
          <svg viewBox="0 0 24 24" fill="none" class="text-primary">
           <path stroke="currentColor" stroke-width="2" d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" />
          </svg>
         </div>
         <h4 class="h5 mb-3">Vertrauen</h4>
         <p class="text-muted mb-0">Transparente Kommunikation und ehrliche Beratung. Ihre Zufriedenheit ist unser oberstes Ziel.</p>
        </div>
       </div>
      </div>
      <div class="col-md-4" data-aos="flip-left" data-aos-delay="300">
       <div class="card h-100 border-0 shadow-sm text-center">
        <div class="card-body d-flex flex-column p-4">
         <div class="ratio ratio-1x1 mb-4" style="width: 80px; margin: 0 auto;">
          <svg viewBox="0 0 24 24" fill="none" class="text-primary">
           <path stroke="currentColor" stroke-width="2" d="M13 2L3 14H12L11 22L21 10H12L13 2Z" />
          </svg>
         </div>
         <h4 class="h5 mb-3">Innovation</h4>
         <p class="text-muted mb-0">Modernste Technologie und fortschrittliche Methoden für optimale Ergebnisse und Effizienz.</p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Team Section -->
   <section class="py-5 bg-light" id="team" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row">
      <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up">
       <h2 class="display-5 fw-bold mb-4">Unser Expertenteam</h2>
       <p class="lead text-muted">Lernen Sie die Menschen kennen, die hinter unserem Erfolg stehen</p>
      </div>
     </div>
     <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
       <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3">
         <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=400&amp;h=300&amp;q=80" alt="Markus Weber - Geschäftsführer" class="card-img-top" style="object-fit: cover;" loading="lazy" width="400" height="300">
        </div>
        <div class="card-body d-flex flex-column text-center">
         <h5 class="card-title mb-2">Markus Weber</h5>
         <p class="text-primary fw-semibold mb-3">Geschäftsführer &amp; Gründer</p>
         <p class="card-text text-muted mb-auto">Mit über 15 Jahren Branchenerfahrung führt Markus unser Unternehmen mit Vision und Leidenschaft. Seine Expertise in der Automobilbranche ist unser Fundament.</p>
        </div>
       </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
       <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3">
         <img src="https://images.unsplash.com/photo-1494790108755-2616c3f48cd1?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=400&amp;h=300&amp;q=80" alt="Sarah Müller - Technische Leiterin" class="card-img-top" style="object-fit: cover;" loading="lazy" width="400" height="300">
        </div>
        <div class="card-body d-flex flex-column text-center">
         <h5 class="card-title mb-2">Sarah Müller</h5>
         <p class="text-primary fw-semibold mb-3">Technische Leiterin</p>
         <p class="card-text text-muted mb-auto">Sarah überwacht alle technischen Aspekte unserer Dienstleistungen. Ihre Detailgenauigkeit und ihr Fachwissen garantieren höchste Qualitätsstandards.</p>
        </div>
       </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
       <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3">
         <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=400&amp;h=300&amp;q=80" alt="Thomas Schmidt - Kundendienst" class="card-img-top" style="object-fit: cover;" loading="lazy" width="400" height="300">
        </div>
        <div class="card-body d-flex flex-column text-center">
         <h5 class="card-title mb-2">Thomas Schmidt</h5>
         <p class="text-primary fw-semibold mb-3">Leiter Kundendienst</p>
         <p class="card-text text-muted mb-auto">Thomas sorgt dafür, dass jeder Kunde die bestmögliche Erfahrung macht. Seine Kommunikationsfähigkeiten und sein Engagement sind beispielhaft.</p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Contact Information Section -->
   <section class="py-5" id="contact-info" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row">
      <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up">
       <h2 class="display-5 fw-bold mb-4">Kontakt</h2>
       <p class="lead text-muted">Haben Sie Fragen? Wir sind gerne für Sie da</p>
      </div>
     </div>
     <div class="row g-4">
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
       <div class="card h-100 border-0 bg-primary text-white">
        <div class="card-body text-center p-4">
         <div class="ratio ratio-1x1 mb-4" style="width: 60px; margin: 0 auto;">
          <svg viewBox="0 0 24 24" fill="none" class="text-white">
           <path stroke="currentColor" stroke-width="2" d="M3 5C3 3.89543 3.89543 3 5 3H8.27924C8.70967 3 9.09181 3.27543 9.22792 3.68377L10.7257 8.17721C10.8831 8.64932 10.6694 9.16531 10.2243 9.38787L7.96701 10.5165C9.06925 12.9612 11.0388 14.9308 13.4835 16.033L14.6121 13.7757C14.8347 13.3306 15.3507 13.1169 15.8228 13.2743L20.3162 14.7721C20.7246 14.9082 21 15.2903 21 15.7208V19C21 20.1046 20.1046 21 19 21H18C9.71573 21 3 14.2843 3 6V5Z" />
          </svg>
         </div>
         <h4 class="card-title mb-3">Telefon</h4>
         <p class="card-text mb-0"><a href="tel:&lt;?php echo str_replace(' ', '', COMPANY_PHONE); ?&gt;" class="text-white text-decoration-none fw-semibold"> <!--?php echo COMPANY_PHONE; ?--> </a></p>
         <small class="opacity-75">Mo-Fr: 8:00-18:00 Uhr</small>
        </div>
       </div>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
       <div class="card h-100 border-0 bg-success text-white">
        <div class="card-body text-center p-4">
         <div class="ratio ratio-1x1 mb-4" style="width: 60px; margin: 0 auto;">
          <svg viewBox="0 0 24 24" fill="none" class="text-white">
           <path stroke="currentColor" stroke-width="2" d="M3 8L10.8906 13.2604C11.5624 13.7083 12.4376 13.7083 13.1094 13.2604L21 8M5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19Z" />
          </svg>
         </div>
         <h4 class="card-title mb-3">E-Mail</h4>
         <p class="card-text mb-0"><a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-white text-decoration-none fw-semibold"> <!--?php echo SUPPORT_EMAIL; ?--> </a></p>
         <small class="opacity-75">Antwort binnen 24h</small>
        </div>
       </div>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
       <div class="card h-100 border-0 bg-warning text-dark">
        <div class="card-body text-center p-4">
         <div class="ratio ratio-1x1 mb-4" style="width: 60px; margin: 0 auto;">
          <svg viewBox="0 0 24 24" fill="none" class="text-dark">
           <path stroke="currentColor" stroke-width="2" d="M17.657 16.657L13.414 20.9C13.2339 21.08 12.9762 21.1823 12.7071 21.1823C12.4379 21.1823 12.1802 21.08 12 20.9L7.757 16.657C6.55114 15.4512 5.53023 14.0297 4.757 12.464C4.00386 10.8656 3.61071 9.14571 3.6 7.404C3.6 5.61305 4.31143 3.89394 5.58579 2.61957C6.86014 1.34521 8.57926 0.633789 10.37 0.633789C12.1607 0.633789 13.8799 1.34521 15.1542 2.61957C16.4286 3.89394 17.14 5.61305 17.14 7.404C17.1293 9.14571 16.7361 10.8656 15.983 12.464C15.2098 14.0297 14.1889 15.4512 12.983 16.657H17.657ZM12 10.5C13.1046 10.5 14 9.60457 14 8.5C14 7.39543 13.1046 6.5 12 6.5C10.8954 6.5 10 7.39543 10 8.5C10 9.60457 10.8954 10.5 12 10.5Z" />
          </svg>
         </div>
         <h4 class="card-title mb-3">Adresse</h4>
         <p class="card-text mb-0 fw-semibold"><!--?php echo COMPANY_ADDRESS; ?--></p>
         <small class="opacity-75">Besuchen Sie uns vor Ort</small>
        </div>
       </div>
      </div>
     </div>
     <div class="row mt-5">
      <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="400">
       <a href="/services.php" class="btn btn-primary btn-lg me-3">Unsere Services</a> <a href="/careers.php" class="btn btn-outline-primary btn-lg">Karriere</a>
      </div>
     </div>
    </div>
   </section>
  </div>
  <!-- Structured Data -->
  <!--?php include __DIR__ . '/includes/footer.php'; ?-->
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