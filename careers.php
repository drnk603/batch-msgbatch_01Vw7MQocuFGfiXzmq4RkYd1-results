<!--?php
/**
 * Careers Page - Stellenangebote und Karriereinformationen
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/config/security.php';
require_once __DIR__ . '/includes/error_handler.php';
require_once __DIR__ . '/includes/functions.php';

// Brand constants
define('BRAND_NAME', 'AutoExpert München');
define('PRIMARY_DOMAIN', 'autoexpert-muenchen.de');
define('SUPPORT_EMAIL', 'info@domain.com');
define('COMPANY_ADDRESS', 'Maximilianstraße 35, 80539 München, Deutschland');
define('COMPANY_PHONE', '+49 89 123 456 789');

$form_errors = [];
$form_success = false;
$csrf_token = generateCSRFToken();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verify CSRF token
    if (!verifyCSRFToken($_POST['csrf_token'] ?? '')) {
        $form_errors['csrf'] = 'Sicherheitstoken-Validierung fehlgeschlagen. Bitte versuchen Sie es erneut.';
    } else {
        // Sanitize inputs
        $name = sanitizeInput($_POST['name'] ?? '', 'string');
        $email = sanitizeInput($_POST['email'] ?? '', 'email');
        $phone = sanitizeInput($_POST['phone'] ?? '', 'string');
        $position = sanitizeInput($_POST['position'] ?? '', 'string');
        $experience = sanitizeInput($_POST['experience'] ?? '', 'string');
        $message = sanitizeInput($_POST['message'] ?? '', 'string');
        
        // Validate inputs
        if (empty($name)) {
            $form_errors['name'] = 'Name ist erforderlich.';
        } elseif (strlen($name) < 2) {
            $form_errors['name'] = 'Name muss mindestens 2 Zeichen lang sein.';
        }
        
        if (empty($email)) {
            $form_errors['email'] = 'E-Mail-Adresse ist erforderlich.';
        } elseif (!validateEmail($email)) {
            $form_errors['email'] = 'Ungültiges E-Mail-Format.';
        }
        
        if (!empty($phone) && strlen($phone) < 10) {
            $form_errors['phone'] = 'Ungültige Telefonnummer.';
        }
        
        if (empty($position)) {
            $form_errors['position'] = 'Position ist erforderlich.';
        }
        
        if (empty($experience)) {
            $form_errors['experience'] = 'Berufserfahrung ist erforderlich.';
        }
        
        if (empty($message)) {
            $form_errors['message'] = 'Nachricht ist erforderlich.';
        } elseif (strlen($message) < 10) {
            $form_errors['message'] = 'Nachricht muss mindestens 10 Zeichen lang sein.';
        }
        
        // If no errors, save submission
        if (empty($form_errors)) {
            $submission_data = [
                'name' =-->
<html lang="de">
 <head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
 </head>
 <body>
  $name, 'email' =&gt; $email, 'phone' =&gt; $phone, 'subject' =&gt; 'Bewerbung für ' . $position, 'message' =&gt; "Position: {$position}Berufserfahrung: {$experience}Nachricht:{$message}" ]; if (saveContactSubmission($submission_data)) { // Send notification to admin $admin_body = "
  <h2>Neue Bewerbung eingegangen</h2>
  <p><strong>Name:</strong> " . escapeHTML($name) . "</p>
  <p><strong>E-Mail:</strong> " . escapeHTML($email) . "</p>
  <p><strong>Telefon:</strong> " . escapeHTML($phone) . "</p>
  <p><strong>Position:</strong> " . escapeHTML($position) . "</p>
  <p><strong>Berufserfahrung:</strong> " . escapeHTML($experience) . "</p>
  <p><strong>Nachricht:</strong></p>
  <p>" . nl2br(escapeHTML($message)) . "</p>
  <p><strong>IP-Adresse:</strong> " . getUserIP() . "</p>
  "; sendEmail(SUPPORT_EMAIL, 'Neue Bewerbung - ' . $position, $admin_body); $form_success = true; } else { $form_errors['general'] = 'Ein Fehler ist beim Verarbeiten Ihrer Bewerbung aufgetreten. Bitte versuchen Sie es erneut.'; } } } } $page_data = [ 'title' =&gt; 'Karriere - Werden Sie Teil unseres Teams', 'description' =&gt; 'Entdecken Sie spannende Karrieremöglichkeiten bei AutoExpert München. Wir suchen qualifizierte Fachkräfte für verschiedene Positionen in der Automobilbranche.', 'keywords' =&gt; 'karriere, jobs, stellenanzeigen, automobilbranche, münchen, bewerbung' ]; include __DIR__ . '/includes/header.php'; ?&gt;
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>&lt;?php echo escapeHTML($page_data['title']); ?&gt; | &lt;?php echo BRAND_NAME; ?&gt;</title>
  <meta name="description" content="&lt;?php echo escapeHTML($page_data['description']); ?&gt;">
  <meta name="keywords" content="&lt;?php echo escapeHTML($page_data['keywords']); ?&gt;">
  <link rel="canonical" href="https://domain.com/careers.php">
  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="&lt;?php echo escapeHTML($page_data['title']); ?&gt;">
  <meta property="og:description" content="&lt;?php echo escapeHTML($page_data['description']); ?&gt;">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://domain.com/careers.php">
  <meta property="og:image" content="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=1200&amp;h=630&amp;fit=crop">
  <meta property="og:site_name" content="&lt;?php echo BRAND_NAME; ?&gt;">
  <!-- JSON-LD Schema -->
  <!-- Header -->
  <main>
   <!-- Hero Section -->
   <section class="py-5" style="background: linear-gradient(135deg, #2d3748 0%, #f56565 100%); min-height: 60vh; display: flex; align-items: center;">
    <div class="container text-center text-white">
     <div class="row justify-content-center">
      <div class="col-lg-8">
       <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Gestalten Sie die Zukunft der Mobilität mit uns</h1>
       <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">Werden Sie Teil des AutoExpert München Teams und entdecken Sie spannende Karrieremöglichkeiten in der Automobilbranche</p>
       <a href="#positions" class="btn btn-light btn-lg px-5 py-3 rounded-pill" data-aos="fade-up" data-aos-delay="200">Offene Stellen ansehen</a>
      </div>
     </div>
    </div>
   </section>
   <!-- Warum bei uns arbeiten -->
   <section class="py-4 py-md-5">
    <div class="container">
     <div class="row">
      <div class="col-lg-6 mb-4" data-aos="fade-right">
       <div class="ratio ratio-16x9">
        <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=800&amp;h=600&amp;fit=crop" alt="Unser Team bei der Arbeit" class="img-fluid rounded object-fit-cover" loading="lazy">
       </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
       <h2 class="display-6 fw-bold mb-4">Warum AutoExpert München?</h2>
       <div class="row g-4">
        <div class="col-12">
         <div class="d-flex">
          <div class="ratio ratio-1x1 me-3" style="width: 48px">
           <svg viewBox="0 0 24 24" fill="currentColor" class="text-primary">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
           </svg>
          </div>
          <div>
           <h4 class="h5 fw-bold mb-2">Exzellenter Ruf</h4>
           <p class="text-muted mb-0">Führender Automobilexperte in München mit über 20 Jahren Erfahrung</p>
          </div>
         </div>
        </div>
        <div class="col-12">
         <div class="d-flex">
          <div class="ratio ratio-1x1 me-3" style="width: 48px">
           <svg viewBox="0 0 24 24" fill="currentColor" class="text-primary">
            <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm-1 16H9V7h9v14z" />
           </svg>
          </div>
          <div>
           <h4 class="h5 fw-bold mb-2">Weiterbildung</h4>
           <p class="text-muted mb-0">Kontinuierliche Schulungen und Zertifizierungen für Ihre berufliche Entwicklung</p>
          </div>
         </div>
        </div>
        <div class="col-12">
         <div class="d-flex">
          <div class="ratio ratio-1x1 me-3" style="width: 48px">
           <svg viewBox="0 0 24 24" fill="currentColor" class="text-primary">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
           </svg>
          </div>
          <div>
           <h4 class="h5 fw-bold mb-2">Attraktive Benefits</h4>
           <p class="text-muted mb-0">Wettbewerbsfähige Vergütung, Firmenwagen und flexible Arbeitszeiten</p>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Offene Stellen -->
   <section id="positions" class="py-4 py-md-5 bg-light">
    <div class="container">
     <div class="row">
      <div class="col-12 text-center mb-5" data-aos="fade-up">
       <h2 class="display-6 fw-bold mb-4">Aktuelle Stellenausschreibungen</h2>
       <p class="lead text-muted">Entdecken Sie unsere aktuellen Karrieremöglichkeiten</p>
      </div>
     </div>
     <div class="row g-4">
      <!-- Position 1 -->
      <div class="col-lg-6" data-aos="flip-left">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body d-flex flex-column p-4">
         <div class="d-flex align-items-center mb-3">
          <div class="ratio ratio-1x1 me-3" style="width: 60px">
           <svg viewBox="0 0 24 24" fill="currentColor" class="text-primary">
            <path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z" />
           </svg>
          </div>
          <div>
           <h3 class="h4 fw-bold mb-1">KFZ-Mechaniker (m/w/d)</h3>
           <span class="badge bg-primary">Vollzeit</span>
          </div>
         </div>
         <p class="text-muted mb-4">Wir suchen einen erfahrenen KFZ-Mechaniker für unser Team. Sie arbeiten an hochwertigen Fahrzeugen und führen Wartungs- und Reparaturarbeiten durch.</p>
         <div class="mb-3">
          <h5 class="h6 fw-bold">Anforderungen:</h5>
          <ul class="list-unstyled small text-muted">
           <li>• Abgeschlossene Ausbildung als KFZ-Mechaniker</li>
           <li>• Mindestens 3 Jahre Berufserfahrung</li>
           <li>• Führerschein Klasse B</li>
          </ul>
         </div>
         <div class="mt-auto">
          <a href="#bewerbung" class="btn btn-outline-primary">Jetzt bewerben</a>
         </div>
        </div>
       </div>
      </div>
      <!-- Position 2 -->
      <div class="col-lg-6" data-aos="flip-left" data-aos-delay="100">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body d-flex flex-column p-4">
         <div class="d-flex align-items-center mb-3">
          <div class="ratio ratio-1x1 me-3" style="width: 60px">
           <svg viewBox="0 0 24 24" fill="currentColor" class="text-primary">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
           </svg>
          </div>
          <div>
           <h3 class="h4 fw-bold mb-1">Serviceberater (m/w/d)</h3>
           <span class="badge bg-success">Vollzeit</span>
          </div>
         </div>
         <p class="text-muted mb-4">Als Serviceberater sind Sie die erste Anlaufstelle für unsere Kunden und koordinieren alle Servicearbeiten professionell und kundenorientiert.</p>
         <div class="mb-3">
          <h5 class="h6 fw-bold">Anforderungen:</h5>
          <ul class="list-unstyled small text-muted">
           <li>• Kaufmännische Ausbildung oder vergleichbar</li>
           <li>• Erfahrung im Automobilbereich</li>
           <li>• Excellent Kommunikationsfähigkeiten</li>
          </ul>
         </div>
         <div class="mt-auto">
          <a href="#bewerbung" class="btn btn-outline-primary">Jetzt bewerben</a>
         </div>
        </div>
       </div>
      </div>
      <!-- Position 3 -->
      <div class="col-lg-6" data-aos="flip-left" data-aos-delay="200">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body d-flex flex-column p-4">
         <div class="d-flex align-items-center mb-3">
          <div class="ratio ratio-1x1 me-3" style="width: 60px">
           <svg viewBox="0 0 24 24" fill="currentColor" class="text-primary">
            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
           </svg>
          </div>
          <div>
           <h3 class="h4 fw-bold mb-1">Kfz-Sachverständiger (m/w/d)</h3>
           <span class="badge bg-warning">Vollzeit</span>
          </div>
         </div>
         <p class="text-muted mb-4">Zur Verstärkung unseres Gutachterteams suchen wir einen qualifizierten Kfz-Sachverständigen für die Bewertung von Fahrzeugschäden.</p>
         <div class="mb-3">
          <h5 class="h6 fw-bold">Anforderungen:</h5>
          <ul class="list-unstyled small text-muted">
           <li>• Zertifizierung als Kfz-Sachverständiger</li>
           <li>• Mehrjährige Erfahrung in der Schadensbewertung</li>
           <li>• Analytisches Denkvermögen</li>
          </ul>
         </div>
         <div class="mt-auto">
          <a href="#bewerbung" class="btn btn-outline-primary">Jetzt bewerben</a>
         </div>
        </div>
       </div>
      </div>
      <!-- Position 4 -->
      <div class="col-lg-6" data-aos="flip-left" data-aos-delay="300">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body d-flex flex-column p-4">
         <div class="d-flex align-items-center mb-3">
          <div class="ratio ratio-1x1 me-3" style="width: 60px">
           <svg viewBox="0 0 24 24" fill="currentColor" class="text-primary">
            <path d="M16 4l-4-4-4 4v2c0 4.42 3.58 8 8 8s8-3.58 8-8V4l-4 4-4-4z" />
           </svg>
          </div>
          <div>
           <h3 class="h4 fw-bold mb-1">Auszubildender KFZ (m/w/d)</h3>
           <span class="badge bg-info">Ausbildung</span>
          </div>
         </div>
         <p class="text-muted mb-4">Starten Sie Ihre Karriere mit einer Ausbildung zum KFZ-Mechatroniker in unserem modernen Betrieb. Wir bieten eine umfassende Ausbildung mit besten Zukunftsperspektiven.</p>
         <div class="mb-3">
          <h5 class="h6 fw-bold">Anforderungen:</h5>
          <ul class="list-unstyled small text-muted">
           <li>• Realschulabschluss oder Abitur</li>
           <li>• Technisches Interesse</li>
           <li>• Teamfähigkeit und Lernbereitschaft</li>
          </ul>
         </div>
         <div class="mt-auto">
          <a href="#bewerbung" class="btn btn-outline-primary">Jetzt bewerben</a>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Bewerbungsformular -->
   <section id="bewerbung" class="py-4 py-md-5">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-lg-8" data-aos="fade-up">
       <div class="text-center mb-5">
        <h2 class="display-6 fw-bold mb-4">Bewerben Sie sich jetzt</h2>
        <p class="lead text-muted">Senden Sie uns Ihre Bewerbungsunterlagen oder kontaktieren Sie uns direkt</p>
       </div>
       <!--?php if ($form_success): ?-->
       <div class="alert alert-success d-flex align-items-center mb-4" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
         <use xlink:href="#check-circle-fill" />
        </svg>
        <div>Vielen Dank für Ihre Bewerbung! Wir haben Ihre Unterlagen erhalten und melden uns in Kürze bei Ihnen.</div>
       </div>
       <!--?php endif; ?-->
       <!--?php if (!empty($form_errors['general'])): ?-->
       <div class="alert alert-danger" role="alert">
        <!--?php echo escapeHTML($form_errors['general']); ?-->
       </div>
       <!--?php endif; ?-->
       <form method="POST" class="needs-validation" novalidate>
        <input type="hidden" name="csrf_token" value="&lt;?php echo escapeHTML($csrf_token); ?&gt;">
        <div class="row g-3">
         <div class="col-md-6">
          <label for="name" class="form-label">Vollständiger Name *</label> <input type="text" class="form-control &lt;?php echo isset($form_errors['name']) ? 'is-invalid' : ''; ?&gt;" id="name" name="name" value="&lt;?php echo escapeHTML($_POST['name'] ?? ''); ?&gt;" required> <!--?php if (isset($form_errors['name'])): ?-->
          <div class="invalid-feedback">
           <!--?php echo escapeHTML($form_errors['name']); ?-->
          </div>
          <!--?php endif; ?-->
         </div>
         <div class="col-md-6">
          <label for="email" class="form-label">E-Mail-Adresse *</label> <input type="email" class="form-control &lt;?php echo isset($form_errors['email']) ? 'is-invalid' : ''; ?&gt;" id="email" name="email" value="&lt;?php echo escapeHTML($_POST['email'] ?? ''); ?&gt;" required> <!--?php if (isset($form_errors['email'])): ?-->
          <div class="invalid-feedback">
           <!--?php echo escapeHTML($form_errors['email']); ?-->
          </div>
          <!--?php endif; ?-->
         </div>
         <div class="col-md-6">
          <label for="phone" class="form-label">Telefonnummer</label> <input type="tel" class="form-control &lt;?php echo isset($form_errors['phone']) ? 'is-invalid' : ''; ?&gt;" id="phone" name="phone" value="&lt;?php echo escapeHTML($_POST['phone'] ?? ''); ?&gt;"> <!--?php if (isset($form_errors['phone'])): ?-->
          <div class="invalid-feedback">
           <!--?php echo escapeHTML($form_errors['phone']); ?-->
          </div>
          <!--?php endif; ?-->
         </div>
         <div class="col-md-6">
          <label for="position" class="form-label">Gewünschte Position *</label> <select class="form-select &lt;?php echo isset($form_errors['position']) ? 'is-invalid' : ''; ?&gt;" id="position" name="position" required> <option value="">Bitte wählen...</option> <option value="KFZ-Mechaniker" <?php echo ($_post[_position_] ?? _)="==" _kfz-mechaniker_ ? _selected_ : _;>&gt;KFZ-Mechaniker (m/w/d)</option> <option value="Serviceberater" <?php echo ($_post[_position_] ?? _)="==" _serviceberater_ ? _selected_ : _;>&gt;Serviceberater (m/w/d)</option> <option value="Kfz-Sachverständiger" <?php echo ($_post[_position_] ?? _)="==" _kfz-sachverständiger_ ? _selected_ : _;>&gt;Kfz-Sachverständiger (m/w/d)</option> <option value="Auszubildender" <?php echo ($_post[_position_] ?? _)="==" _auszubildender_ ? _selected_ : _;>&gt;Auszubildender KFZ (m/w/d)</option> <option value="Sonstige" <?php echo ($_post[_position_] ?? _)="==" _sonstige_ ? _selected_ : _;>&gt;Sonstige Position</option> </select> <!--?php if (isset($form_errors['position'])): ?-->
          <div class="invalid-feedback">
           <!--?php echo escapeHTML($form_errors['position']); ?-->
          </div>
          <!--?php endif; ?-->
         </div>
         <div class="col-12">
          <label for="experience" class="form-label">Berufserfahrung *</label> <select class="form-select &lt;?php echo isset($form_errors['experience']) ? 'is-invalid' : ''; ?&gt;" id="experience" name="experience" required> <option value="">Bitte wählen...</option> <option value="Berufseinsteiger" <?php echo ($_post[_experience_] ?? _)="==" _berufseinsteiger_ ? _selected_ : _;>&gt;Berufseinsteiger</option> <option value="1-3 Jahre" <?php echo ($_post[_experience_] ?? _)="==" _1-3 jahre_ ? _selected_ : _;>&gt;1-3 Jahre</option> <option value="3-5 Jahre" <?php echo ($_post[_experience_] ?? _)="==" _3-5 jahre_ ? _selected_ : _;>&gt;3-5 Jahre</option> <option value="5-10 Jahre" <?php echo ($_post[_experience_] ?? _)="==" _5-10 jahre_ ? _selected_ : _;>&gt;5-10 Jahre</option> <option value="Über 10 Jahre" <?php echo ($_post[_experience_] ?? _)="==" _über 10 jahre_ ? _selected_ : _;>&gt;Über 10 Jahre</option> </select> <!--?php if (isset($form_errors['experience'])): ?-->
          <div class="invalid-feedback">
           <!--?php echo escapeHTML($form_errors['experience']); ?-->
          </div>
          <!--?php endif; ?-->
         </div>
         <div class="col-12">
          <label for="message" class="form-label">Anschreiben / Zusätzliche Informationen *</label> <textarea class="form-control &lt;?php echo isset($form_errors['message']) ? 'is-invalid' : ''; ?&gt;" id="message" name="message" rows="6" placeholder="Erzählen Sie uns etwas über sich und Ihre Motivation..." required>&lt;?php echo escapeHTML($_POST['message'] ?? ''); ?&gt;</textarea> <!--?php if (isset($form_errors['message'])): ?-->
          <div class="invalid-feedback">
           <!--?php echo escapeHTML($form_errors['message']); ?-->
          </div>
          <!--?php endif; ?-->
         </div>
         <div class="col-12">
          <div class="form-check">
           <input class="form-check-input" type="checkbox" id="privacy" required> <label class="form-check-label" for="privacy"> Ich stimme der Verarbeitung meiner Daten gemäß der <a href="privacy.php" class="text-decoration-none">Datenschutzerklärung</a> zu. * </label>
           <div class="invalid-feedback">Sie müssen der Datenschutzerklärung zustimmen.</div>
          </div>
         </div>
         <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary btn-lg px-5 py-3">Bewerbung absenden</button>
          <p class="small text-muted mt-3 mb-0">Oder senden Sie Ihre Bewerbung direkt an <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-decoration-none"><!--?php echo SUPPORT_EMAIL; ?--></a></p>
         </div>
        </div>
       </form>
      </div>
     </div>
    </div>
   </section>
   <!-- Kontakt Info -->
   <section class="py-4 py-md-5 bg-light">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-lg-8 text-center" data-aos="fade-up">
       <h3 class="h4 fw-bold mb-4">Haben Sie Fragen zu einer Stelle?</h3>
       <p class="text-muted mb-4">Zögern Sie nicht, uns zu kontaktieren. Wir beantworten gerne alle Ihre Fragen zu den ausgeschriebenen Positionen.</p>
       <div class="row g-4 justify-content-center">
        <div class="col-md-6">
         <div class="d-flex align-items-center justify-content-center">
          <div class="ratio ratio-1x1 me-3" style="width: 24px">
           <svg viewBox="0 0 24 24" fill="currentColor" class="text-primary">
            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
           </svg>
          </div>
          <span><a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-decoration-none"><!--?php echo SUPPORT_EMAIL; ?--></a></span>
         </div>
        </div>
        <div class="col-md-6">
         <div class="d-flex align-items-center justify-content-center">
          <div class="ratio ratio-1x1 me-3" style="width: 24px">
           <svg viewBox="0 0 24 24" fill="currentColor" class="text-primary">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
           </svg>
          </div>
          <span><a href="tel:&lt;?php echo str_replace(' ', '', COMPANY_PHONE); ?&gt;" class="text-decoration-none"><!--?php echo COMPANY_PHONE; ?--></a></span>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
  </main>
  <!-- Footer -->
  <!-- Scripts -->
  <script>
        // Initialize AOS
        AOS.init({
            once: false,
            duration: 600,
            easing: 'ease-out',
            offset: 120,
            mirror: false
        });
        
        // Respect reduced motion preference
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            AOS.init({ disable: true });
        }
    </script>
  <!--?php
include __DIR__ . '/includes/footer.php';
?-->
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