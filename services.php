<!--?php
/**
 * Services Page - AutoHub Deutschland
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/config/security.php';
require_once __DIR__ . '/includes/error_handler.php';
require_once __DIR__ . '/includes/functions.php';

// Brand constants for automotive sector in Germany
const BRAND_NAME = 'AutoHub Deutschland';
const PRIMARY_DOMAIN = 'autohub-deutschland.de';
const SUPPORT_EMAIL = 'info@domain.com';
const BUSINESS_ADDRESS = 'Autostraße 123, 10115 Berlin, Deutschland';
const BUSINESS_PHONE = '+49 30 12345678';

$page_data = [
    'title' =-->
<html>
 <head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
 </head>
 <body>
  'Unsere Dienstleistungen', 'description' =&gt; 'Entdecken Sie unsere umfassenden Automobildienstleistungen - von Wartung bis hin zu maßgeschneiderten Lösungen für Ihr Fahrzeug.', 'keywords' =&gt; 'Autowerkstatt, Fahrzeugservice, Wartung, Reparatur, Deutschland, Berlin', 'author_name' =&gt; BRAND_NAME ]; include __DIR__ . '/includes/header.php'; ?&gt;
  <div class="services-page">
   <!-- Hero Section -->
   <section class="hero-section py-4 py-md-5" data-aos="fade-in">
    <div class="container">
     <div class="row align-items-center min-vh-50">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
       <div class="hero-content">
        <h1 class="display-4 fw-bold text-white mb-4">Professionelle
         <br>
         <span class="text-gradient">Automobildienstleistungen</span></h1>
        <p class="lead text-white-75 mb-4">Von der Inspektion bis zur Komplettrestaurierung - wir bieten Ihnen erstklassige Services für Ihr Fahrzeug mit modernster Technologie und jahrelanger Erfahrung.</p>
        <div class="hero-actions d-flex flex-column flex-sm-row gap-3">
         <a href="#services-grid" class="btn btn-light btn-lg px-4" role="button"> 
          <svg class="me-2" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
           <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z" />
          </svg> Services erkunden 
         </a> <a href="/contact.php" class="btn btn-outline-light btn-lg px-4" role="button"> Beratung anfragen </a>
        </div>
       </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
       <div class="hero-visual position-relative">
        <div class="ratio ratio-16x9">
         <img src="https://images.unsplash.com/photo-1486754735734-325b5831c3ad?w=800&amp;h=600&amp;fit=crop&amp;crop=center" alt="Professionelle Autowerkstatt mit modernen Geräten" class="img-fluid rounded-4 shadow-lg" loading="lazy" width="800" height="600">
        </div>
        <div class="floating-card position-absolute bottom-0 start-0 translate-middle-x bg-white p-3 rounded-3 shadow" data-aos="fade-up" data-aos-delay="600">
         <div class="d-flex align-items-center gap-3">
          <div class="icon-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; border-radius: 50%;">
           <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
           </svg>
          </div>
          <div>
           <div class="fw-bold">15+ Jahre Erfahrung</div>
           <div class="text-muted small">Zertifizierte Fachkräfte</div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Services Grid -->
   <section id="services-grid" class="py-4 py-md-5" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row mb-5">
      <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
       <h2 class="display-5 fw-bold mb-3">Unsere Servicepalette</h2>
       <p class="lead text-muted">Wir bieten Ihnen eine umfassende Palette an Automobildienstleistungen - von der regelmäßigen Wartung bis hin zu komplexen Reparaturen.</p>
      </div>
     </div>
     <div class="row g-4">
      <!-- Service 1: Inspektion & Wartung -->
      <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="100">
       <div class="service-card card h-100 border-0 shadow-sm hover-lift">
        <div class="card-header bg-transparent border-0 pt-4">
         <div class="service-icon mx-auto mb-3 d-flex align-items-center justify-content-center bg-primary text-white" style="width: 80px; height: 80px; border-radius: 50%;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
           <path d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z" />
          </svg>
         </div>
         <h3 class="h4 fw-bold text-center mb-0">Inspektion &amp; Wartung</h3>
        </div>
        <div class="card-body d-flex flex-column">
         <p class="text-muted mb-4">Regelmäßige Fahrzeuginspektion nach Herstellervorgaben, Ölwechsel, Filterwechsel und präventive Wartungsarbeiten für optimale Fahrzeugleistung.</p>
         <ul class="list-unstyled mb-4">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>HU/AU-Vorbereitung</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Ölwechsel-Service</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Bremseninspektion</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Klimaanlagen-Check</li>
         </ul>
         <a href="/contact.php" class="btn btn-outline-primary mt-auto" role="button"> Termin vereinbaren </a>
        </div>
       </div>
      </div>
      <!-- Service 2: Motor & Getriebe -->
      <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="200">
       <div class="service-card card h-100 border-0 shadow-sm hover-lift">
        <div class="card-header bg-transparent border-0 pt-4">
         <div class="service-icon mx-auto mb-3 d-flex align-items-center justify-content-center bg-success text-white" style="width: 80px; height: 80px; border-radius: 50%;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
           <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M12,6A6,6 0 0,0 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12A6,6 0 0,0 12,6M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10Z" />
          </svg>
         </div>
         <h3 class="h4 fw-bold text-center mb-0">Motor &amp; Getriebe</h3>
        </div>
        <div class="card-body d-flex flex-column">
         <p class="text-muted mb-4">Professionelle Diagnose und Reparatur von Motor- und Getriebeschäden. Modernste Diagnosetechnik für präzise Fehlererkennung.</p>
         <ul class="list-unstyled mb-4">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Computerdiagnose</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Motorreparaturen</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Getriebeservice</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Kupplungstausch</li>
         </ul>
         <a href="/contact.php" class="btn btn-outline-success mt-auto" role="button"> Diagnose anfragen </a>
        </div>
       </div>
      </div>
      <!-- Service 3: Karosserie & Lackierung -->
      <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="300">
       <div class="service-card card h-100 border-0 shadow-sm hover-lift">
        <div class="card-header bg-transparent border-0 pt-4">
         <div class="service-icon mx-auto mb-3 d-flex align-items-center justify-content-center bg-warning text-white" style="width: 80px; height: 80px; border-radius: 50%;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
           <path d="M18.92,5.01C18.72,4.42 18.16,4 17.5,4H6.5C5.84,4 5.28,4.42 5.08,5.01L3,10V16A1,1 0 0,0 4,17H5A1,1 0 0,0 6,16V15H18V16A1,1 0 0,0 19,17H20A1,1 0 0,0 21,16V10L18.92,5.01M6.5,5.5H17.5L18.5,8H5.5L6.5,5.5M19,13.5H5V10.5H19V13.5Z" />
          </svg>
         </div>
         <h3 class="h4 fw-bold text-center mb-0">Karosserie &amp; Lackierung</h3>
        </div>
        <div class="card-body d-flex flex-column">
         <p class="text-muted mb-4">Unfallreparaturen, Karosserieinstandsetzung und professionelle Lackierarbeiten in unserer modernen Lackierkabine.</p>
         <ul class="list-unstyled mb-4">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Unfallreparatur</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Spotrepair-Lackierung</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Dellen-Reparatur</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Lackschutzfolien</li>
         </ul>
         <a href="/contact.php" class="btn btn-outline-warning mt-auto" role="button"> Kostenvoranschlag </a>
        </div>
       </div>
      </div>
      <!-- Service 4: Reifen & Räder -->
      <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="400">
       <div class="service-card card h-100 border-0 shadow-sm hover-lift">
        <div class="card-header bg-transparent border-0 pt-4">
         <div class="service-icon mx-auto mb-3 d-flex align-items-center justify-content-center bg-info text-white" style="width: 80px; height: 80px; border-radius: 50%;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
           <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M12,6A6,6 0 0,0 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12A6,6 0 0,0 12,6M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8Z" />
          </svg>
         </div>
         <h3 class="h4 fw-bold text-center mb-0">Reifen &amp; Räder</h3>
        </div>
        <div class="card-body d-flex flex-column">
         <p class="text-muted mb-4">Kompletter Reifen- und Felgenservice mit Einlagerung, Auswuchtung und Montage aller gängigen Marken.</p>
         <ul class="list-unstyled mb-4">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Reifenmontage</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Räder auswuchten</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Einlagerungsservice</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>RDKS-Programmierung</li>
         </ul>
         <a href="/contact.php" class="btn btn-outline-info mt-auto" role="button"> Reifencheck buchen </a>
        </div>
       </div>
      </div>
      <!-- Service 5: Elektrik & Elektronik -->
      <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="500">
       <div class="service-card card h-100 border-0 shadow-sm hover-lift">
        <div class="card-header bg-transparent border-0 pt-4">
         <div class="service-icon mx-auto mb-3 d-flex align-items-center justify-content-center bg-danger text-white" style="width: 80px; height: 80px; border-radius: 50%;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
           <path d="M8.25,2.54L11.1,7.65L12,6L12.9,7.65L15.75,2.54C19.12,3.95 21.66,7.07 21.95,10.79C22.05,11.83 21.95,12.88 21.66,13.88L18.88,10.88L17.97,12.53L20.75,15.54C19.9,18.35 17.7,20.55 14.89,21.4L11.9,18.62L10.25,19.53L13.25,22.3C10.18,22.64 7.07,21.42 4.87,19.22C2.67,17 1.45,13.9 1.79,10.83L4.57,13.61L5.47,12L2.7,9.23C3.55,6.42 5.75,4.22 8.56,3.37L11.54,6.15L12.19,4.5L9.21,1.73C9.87,1.6 10.55,1.53 11.24,1.53C12.93,1.53 14.6,2.04 16.04,2.96L12.19,8.57L11.3,7.27L8.25,2.54Z" />
          </svg>
         </div>
         <h3 class="h4 fw-bold text-center mb-0">Elektrik &amp; Elektronik</h3>
        </div>
        <div class="card-body d-flex flex-column">
         <p class="text-muted mb-4">Spezialist für moderne Fahrzeugelektronik, Diagnosesysteme und alle elektrischen Komponenten Ihres Fahrzeugs.</p>
         <ul class="list-unstyled mb-4">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Batteriecheck &amp; -tausch</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Lichtanlagen-Service</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Anhängerkupplung</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Navigationssysteme</li>
         </ul>
         <a href="/contact.php" class="btn btn-outline-danger mt-auto" role="button"> Elektronik-Check </a>
        </div>
       </div>
      </div>
      <!-- Service 6: Oldtimer & Klassiker -->
      <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="600">
       <div class="service-card card h-100 border-0 shadow-sm hover-lift">
        <div class="card-header bg-transparent border-0 pt-4">
         <div class="service-icon mx-auto mb-3 d-flex align-items-center justify-content-center bg-secondary text-white" style="width: 80px; height: 80px; border-radius: 50%;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
           <path d="M5,11L6.5,6.5H17.5L19,11M17.5,16A1.5,1.5 0 0,1 16,14.5A1.5,1.5 0 0,1 17.5,13A1.5,1.5 0 0,1 19,14.5A1.5,1.5 0 0,1 17.5,16M6.5,16A1.5,1.5 0 0,1 5,14.5A1.5,1.5 0 0,1 6.5,13A1.5,1.5 0 0,1 8,14.5A1.5,1.5 0 0,1 6.5,16M18.92,6C18.72,5.42 18.16,5 17.5,5H6.5C5.84,5 5.28,5.42 5.08,6L3,12V20A1,1 0 0,0 4,21H5A1,1 0 0,0 6,20V19H18V20A1,1 0 0,0 19,21H20A1,1 0 0,0 21,20V12L18.92,6Z" />
          </svg>
         </div>
         <h3 class="h4 fw-bold text-center mb-0">Oldtimer &amp; Klassiker</h3>
        </div>
        <div class="card-body d-flex flex-column">
         <p class="text-muted mb-4">Liebevolle Restaurierung und fachgerechte Wartung klassischer Fahrzeuge mit Originalteilen und traditionellen Handwerkstechniken.</p>
         <ul class="list-unstyled mb-4">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Restaurierung</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Originalteile-Beschaffung</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>H-Kennzeichen Vorbereitung</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Wertgutachten</li>
         </ul>
         <a href="/contact.php" class="btn btn-outline-secondary mt-auto" role="button"> Beratung vereinbaren </a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Process Section -->
   <section class="py-4 py-md-5 bg-light">
    <div class="container">
     <div class="row mb-5">
      <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
       <h2 class="display-5 fw-bold mb-3">Unser Serviceprozess</h2>
       <p class="lead text-muted">Von der ersten Kontaktaufnahme bis zur finalen Qualitätskontrolle - so läuft Ihr Service bei uns ab.</p>
      </div>
     </div>
     <div class="row g-4">
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
       <div class="process-step text-center">
        <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center bg-primary text-white fw-bold" style="width: 60px; height: 60px; border-radius: 50%;">1</div>
        <h4 class="h5 fw-bold mb-3">Terminvereinbarung</h4>
        <p class="text-muted">Online oder telefonisch vereinbaren Sie einen passenden Termin für Ihren Service.</p>
       </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
       <div class="process-step text-center">
        <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center bg-success text-white fw-bold" style="width: 60px; height: 60px; border-radius: 50%;">2</div>
        <h4 class="h5 fw-bold mb-3">Diagnose &amp; Analyse</h4>
        <p class="text-muted">Unsere Experten führen eine gründliche Diagnose durch und erstellen einen Kostenvoranschlag.</p>
       </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
       <div class="process-step text-center">
        <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center bg-warning text-white fw-bold" style="width: 60px; height: 60px; border-radius: 50%;">3</div>
        <h4 class="h5 fw-bold mb-3">Professionelle Reparatur</h4>
        <p class="text-muted">Mit modernen Geräten und Originalteilen führen wir die Arbeiten fachgerecht aus.</p>
       </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
       <div class="process-step text-center">
        <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center bg-info text-white fw-bold" style="width: 60px; height: 60px; border-radius: 50%;">4</div>
        <h4 class="h5 fw-bold mb-3">Qualitätskontrolle</h4>
        <p class="text-muted">Abschließende Prüfung und Testfahrt stellen sicher, dass alles perfekt funktioniert.</p>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- CTA Section -->
   <section class="py-4 py-md-5">
    <div class="container">
     <div class="row">
      <div class="col-lg-10 mx-auto">
       <div class="cta-card bg-gradient-primary text-white p-4 p-md-5 rounded-4 text-center" data-aos="zoom-in">
        <h2 class="display-6 fw-bold mb-3">Bereit für professionellen Service?</h2>
        <p class="lead mb-4">Kontaktieren Sie uns noch heute und vereinbaren Sie einen Termin für Ihr Fahrzeug. Wir freuen uns darauf, Ihnen zu helfen!</p>
        <div class="cta-buttons d-flex flex-column flex-sm-row gap-3 justify-content-center">
         <a href="/contact.php" class="btn btn-light btn-lg px-4" role="button"> 
          <svg class="me-2" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
           <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
          </svg> 
          <!--?php echo BUSINESS_PHONE; ?--> 
         </a> <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="btn btn-outline-light btn-lg px-4" role="button"> 
          <svg class="me-2" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
           <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
          </svg> E-Mail senden 
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
  </div>
  <!-- JSON-LD Schema -->
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