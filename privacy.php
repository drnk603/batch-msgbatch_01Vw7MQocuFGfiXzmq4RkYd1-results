<!--?php
/**
 * Datenschutzerklärung (Privacy Policy)
 * Compliance: GDPR, DSGVO, German Privacy Laws
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/security.php';
require_once __DIR__ . '/includes/error_handler.php';
require_once __DIR__ . '/includes/functions.php';

// Page data
$page_data = [
    'title' =-->
<html>
 <head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
 </head>
 <body>
  'Datenschutzerklärung', 'description' =&gt; 'Informationen zum Datenschutz und zur Verarbeitung personenbezogener Daten auf unserer Website.', 'keywords' =&gt; 'Datenschutz, DSGVO, Privatsphäre, Cookies, Datenverarbeitung' ]; // Business constants define('BRAND_NAME', 'AutoExpertise Deutschland'); define('PRIMARY_DOMAIN', 'autoexpertise-deutschland.de'); define('SUPPORT_EMAIL', 'info@' . PRIMARY_DOMAIN); define('BUSINESS_ADDRESS', 'Musterstraße 123, 10115 Berlin, Deutschland'); define('BUSINESS_PHONE', '+49 30 12345678'); include __DIR__ . '/includes/header.php'; ?&gt;
  <div class="container py-4 py-md-5">
   <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="/">Startseite</a></li>
     <li class="breadcrumb-item active" aria-current="page">Datenschutzerklärung</li>
    </ol>
   </nav>
   <article class="privacy-policy">
    <header class="mb-4">
     <h1 class="display-5 fw-bold text-dark mb-3">Datenschutzerklärung</h1>
     <p class="lead text-muted">Informationen gemäß Art. 13 DSGVO</p>
     <div class="alert alert-info" role="alert">
      <strong>Letzte Aktualisierung:</strong> <!--?php echo date('d. F Y'); ?-->
     </div>
    </header>
    <div class="row">
     <div class="col-lg-3">
      <nav class="toc-nav sticky-top" style="top: 100px;">
       <h5 class="h6 text-uppercase fw-bold mb-3">Inhaltsverzeichnis</h5>
       <ul class="list-unstyled">
        <li><a href="#verantwortlicher" class="text-decoration-none">1. Verantwortlicher</a></li>
        <li><a href="#datenschutzbeauftragter" class="text-decoration-none">2. Datenschutzbeauftragter</a></li>
        <li><a href="#datenverarbeitung" class="text-decoration-none">3. Datenverarbeitung</a></li>
        <li><a href="#website-nutzung" class="text-decoration-none">4. Website-Nutzung</a></li>
        <li><a href="#cookies" class="text-decoration-none">5. Cookies</a></li>
        <li><a href="#kontaktformular" class="text-decoration-none">6. Kontaktformular</a></li>
        <li><a href="#rechte" class="text-decoration-none">7. Ihre Rechte</a></li>
        <li><a href="#speicherdauer" class="text-decoration-none">8. Speicherdauer</a></li>
        <li><a href="#sicherheit" class="text-decoration-none">9. Datensicherheit</a></li>
        <li><a href="#aenderungen" class="text-decoration-none">10. Änderungen</a></li>
       </ul>
      </nav>
     </div>
     <div class="col-lg-9">
      <div class="privacy-content">
       <!-- 1. Verantwortlicher -->
       <section id="verantwortlicher" class="mb-5 scroll-margin-top" data-aos="fade-up">
        <h2 class="h3 fw-bold text-dark mb-3">1. Verantwortlicher für die Datenverarbeitung</h2>
        <div class="card border-0 bg-light">
         <div class="card-body">
          <h3 class="h5 fw-bold text-primary"><!--?php echo BRAND_NAME; ?--></h3>
          <address class="mb-0"><!--?php echo BUSINESS_ADDRESS; ?-->
           <br>
           <strong>Telefon:</strong> <a href="tel:&lt;?php echo str_replace(' ', '', BUSINESS_PHONE); ?&gt;"><!--?php echo BUSINESS_PHONE; ?--></a>
           <br>
           <strong>E-Mail:</strong> <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;"><!--?php echo SUPPORT_EMAIL; ?--></a></address>
         </div>
        </div>
       </section>
       <!-- 2. Datenschutzbeauftragter -->
       <section id="datenschutzbeauftragter" class="mb-5 scroll-margin-top" data-aos="fade-up" data-aos-delay="100">
        <h2 class="h3 fw-bold text-dark mb-3">2. Datenschutzbeauftragter</h2>
        <p class="text-muted mb-3">Bei Fragen zum Datenschutz können Sie sich an unseren Datenschutzbeauftragten wenden:</p>
        <div class="card border-0 bg-light">
         <div class="card-body">
          <strong>E-Mail:</strong> <a href="mailto:datenschutz@&lt;?php echo PRIMARY_DOMAIN; ?&gt;">datenschutz@<!--?php echo PRIMARY_DOMAIN; ?--></a>
          <br>
          <strong>Postanschrift:</strong> <!--?php echo BRAND_NAME; ?-->
           , z.Hd. Datenschutzbeauftragter, <!--?php echo BUSINESS_ADDRESS; ?-->
         </div>
        </div>
       </section>
       <!-- 3. Grundsätzliches zur Datenverarbeitung -->
       <section id="datenverarbeitung" class="mb-5 scroll-margin-top" data-aos="fade-up" data-aos-delay="200">
        <h2 class="h3 fw-bold text-dark mb-3">3. Grundsätzliches zur Datenverarbeitung</h2>
        <div class="row">
         <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm">
           <div class="card-body">
            <h3 class="h5 fw-bold text-primary mb-3">Rechtsgrundlagen</h3>
            <p class="text-muted">Wir verarbeiten Ihre personenbezogenen Daten nur, wenn eine Rechtsgrundlage nach Art. 6 DSGVO vorliegt:</p>
            <ul class="text-muted">
             <li>Einwilligung (Art. 6 Abs. 1 lit. a)</li>
             <li>Vertragserfüllung (Art. 6 Abs. 1 lit. b)</li>
             <li>Rechtliche Verpflichtung (Art. 6 Abs. 1 lit. c)</li>
             <li>Berechtigtes Interesse (Art. 6 Abs. 1 lit. f)</li>
            </ul>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm">
           <div class="card-body">
            <h3 class="h5 fw-bold text-primary mb-3">Datenminimierung</h3>
            <p class="text-muted">Wir erheben nur die Daten, die für den jeweiligen Zweck erforderlich sind. Dabei beachten wir die Grundsätze der:</p>
            <ul class="text-muted">
             <li>Zweckbindung</li>
             <li>Datenminimierung</li>
             <li>Speicherbegrenzung</li>
             <li>Transparenz</li>
            </ul>
           </div>
          </div>
         </div>
        </div>
       </section>
       <!-- 4. Website-Nutzung -->
       <section id="website-nutzung" class="mb-5 scroll-margin-top" data-aos="fade-up" data-aos-delay="300">
        <h2 class="h3 fw-bold text-dark mb-3">4. Nutzung unserer Website</h2>
        <div class="accordion" id="websiteAccordion">
         <div class="accordion-item">
          <h3 class="accordion-header">
           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#logfiles" aria-expanded="true">Server-Logfiles</button>
          </h3>
          <div id="logfiles" class="accordion-collapse collapse show" data-bs-parent="#websiteAccordion">
           <div class="accordion-body">
            <p><strong>Zweck:</strong> Technische Bereitstellung der Website und Sicherstellung des Betriebs.</p>
            <p><strong>Erhobene Daten:</strong></p>
            <ul>
             <li>IP-Adresse</li>
             <li>Datum und Uhrzeit des Zugriffs</li>
             <li>Aufgerufene Seite/Datei</li>
             <li>Übertragene Datenmenge</li>
             <li>Browser-Typ und -Version</li>
             <li>Betriebssystem</li>
             <li>Referrer-URL</li>
            </ul>
            <p><strong>Rechtsgrundlage:</strong> Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse)</p>
            <p><strong>Speicherdauer:</strong> 30 Tage</p>
           </div>
          </div>
         </div>
         <div class="accordion-item">
          <h3 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ssl">SSL-/TLS-Verschlüsselung</button>
          </h3>
          <div id="ssl" class="accordion-collapse collapse" data-bs-parent="#websiteAccordion">
           <div class="accordion-body">
            <p>Diese Website nutzt SSL-/TLS-Verschlüsselung für die sichere Übertragung von Daten. Eine verschlüsselte Verbindung erkennen Sie am "https://" in der Adresszeile Ihres Browsers und am Schloss-Symbol.</p>
            <p>Verschlüsselte Seiten können nicht von Dritten mitgelesen werden.</p>
           </div>
          </div>
         </div>
        </div>
       </section>
       <!-- 5. Cookies -->
       <section id="cookies" class="mb-5 scroll-margin-top" data-aos="fade-up" data-aos-delay="400">
        <h2 class="h3 fw-bold text-dark mb-3">5. Cookies und ähnliche Technologien</h2>
        <div class="alert alert-warning" role="alert">
         <h4 class="alert-heading">Was sind Cookies?</h4>
         <p class="mb-0">Cookies sind kleine Textdateien, die auf Ihrem Endgerät gespeichert werden. Sie ermöglichen es, Ihren Browser beim nächsten Besuch wiederzuerkennen.</p>
        </div>
        <div class="row mb-4">
         <div class="col-md-6">
          <div class="card border-success">
           <div class="card-header bg-success text-white">
            <h3 class="h6 mb-0">Technisch notwendige Cookies</h3>
           </div>
           <div class="card-body">
            <p class="card-text">Diese Cookies sind für das Funktionieren der Website erforderlich:</p>
            <ul>
             <li>Session-Cookies</li>
             <li>Sicherheits-Cookies</li>
             <li>Load-Balancing-Cookies</li>
            </ul>
            <p><strong>Rechtsgrundlage:</strong> Art. 6 Abs. 1 lit. f DSGVO</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="card border-info">
           <div class="card-header bg-info text-white">
            <h3 class="h6 mb-0">Analytische Cookies</h3>
           </div>
           <div class="card-body">
            <p class="card-text">Diese Cookies helfen uns, die Website zu verbessern:</p>
            <ul>
             <li>Besucherstatistiken</li>
             <li>Nutzungsanalyse</li>
             <li>Performance-Messung</li>
            </ul>
            <p><strong>Rechtsgrundlage:</strong> Art. 6 Abs. 1 lit. a DSGVO (Einwilligung)</p>
           </div>
          </div>
         </div>
        </div>
        <div class="card bg-light">
         <div class="card-body">
          <h3 class="h5 fw-bold">Cookie-Einstellungen verwalten</h3>
          <p>Sie können Ihre Cookie-Einstellungen jederzeit in Ihrem Browser ändern. Die Hilfe-Funktion Ihres Browsers erklärt, wie Sie Cookies löschen oder deren Speicherung verhindern.</p>
          <p class="mb-0"><strong>Hinweis:</strong> Bei deaktivierten Cookies können einige Funktionen der Website eingeschränkt sein.</p>
         </div>
        </div>
       </section>
       <!-- 6. Kontaktformular -->
       <section id="kontaktformular" class="mb-5 scroll-margin-top" data-aos="fade-up" data-aos-delay="500">
        <h2 class="h3 fw-bold text-dark mb-3">6. Kontaktformular und E-Mail-Kontakt</h2>
        <div class="row">
         <div class="col-lg-8">
          <h3 class="h5 fw-bold text-primary mb-3">Datenverarbeitung bei Kontaktaufnahme</h3>
          <p class="text-muted">Bei der Nutzung unseres Kontaktformulars oder bei E-Mail-Kontakt verarbeiten wir folgende Daten:</p>
          <div class="table-responsive">
           <table class="table table-bordered">
            <thead class="table-light">
             <tr>
              <th>Datenart</th>
              <th>Zweck</th>
              <th>Rechtsgrundlage</th>
             </tr>
            </thead>
            <tbody>
             <tr>
              <td>Name</td>
              <td>Persönliche Ansprache</td>
              <td>Art. 6 Abs. 1 lit. a DSGVO</td>
             </tr>
             <tr>
              <td>E-Mail-Adresse</td>
              <td>Antwort auf Ihre Anfrage</td>
              <td>Art. 6 Abs. 1 lit. a DSGVO</td>
             </tr>
             <tr>
              <td>Telefonnummer (optional)</td>
              <td>Telefonischer Rückruf</td>
              <td>Art. 6 Abs. 1 lit. a DSGVO</td>
             </tr>
             <tr>
              <td>Nachricht</td>
              <td>Bearbeitung Ihrer Anfrage</td>
              <td>Art. 6 Abs. 1 lit. a DSGVO</td>
             </tr>
             <tr>
              <td>IP-Adresse</td>
              <td>Spam-Schutz, Sicherheit</td>
              <td>Art. 6 Abs. 1 lit. f DSGVO</td>
             </tr>
            </tbody>
           </table>
          </div>
         </div>
         <div class="col-lg-4">
          <div class="card border-warning">
           <div class="card-header bg-warning text-dark">
            <h3 class="h6 mb-0">Wichtige Hinweise</h3>
           </div>
           <div class="card-body">
            <ul class="mb-0">
             <li>Alle Angaben sind freiwillig</li>
             <li>Daten werden verschlüsselt übertragen</li>
             <li>Keine Weitergabe an Dritte</li>
             <li>Löschung auf Wunsch möglich</li>
            </ul>
           </div>
          </div>
         </div>
        </div>
       </section>
       <!-- 7. Ihre Rechte -->
       <section id="rechte" class="mb-5 scroll-margin-top" data-aos="fade-up" data-aos-delay="600">
        <h2 class="h3 fw-bold text-dark mb-3">7. Ihre Rechte als betroffene Person</h2>
        <div class="row g-3">
         <div class="col-md-6">
          <div class="card h-100 border-primary">
           <div class="card-body">
            <h3 class="h6 fw-bold text-primary">Auskunftsrecht (Art. 15 DSGVO)</h3>
            <p class="text-muted mb-0">Sie haben das Recht, Auskunft über die von uns verarbeiteten personenbezogenen Daten zu erhalten.</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="card h-100 border-primary">
           <div class="card-body">
            <h3 class="h6 fw-bold text-primary">Berichtigungsrecht (Art. 16 DSGVO)</h3>
            <p class="text-muted mb-0">Sie haben das Recht, die Berichtigung unrichtiger oder unvollständiger Daten zu verlangen.</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="card h-100 border-primary">
           <div class="card-body">
            <h3 class="h6 fw-bold text-primary">Löschungsrecht (Art. 17 DSGVO)</h3>
            <p class="text-muted mb-0">Sie haben das Recht auf Löschung Ihrer Daten, sofern keine gesetzlichen Aufbewahrungspflichten bestehen.</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="card h-100 border-primary">
           <div class="card-body">
            <h3 class="h6 fw-bold text-primary">Einschränkungsrecht (Art. 18 DSGVO)</h3>
            <p class="text-muted mb-0">Sie haben das Recht, die Einschränkung der Verarbeitung zu verlangen.</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="card h-100 border-primary">
           <div class="card-body">
            <h3 class="h6 fw-bold text-primary">Datenübertragbarkeit (Art. 20 DSGVO)</h3>
            <p class="text-muted mb-0">Sie haben das Recht, Ihre Daten in einem strukturierten Format zu erhalten.</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="card h-100 border-primary">
           <div class="card-body">
            <h3 class="h6 fw-bold text-primary">Widerspruchsrecht (Art. 21 DSGVO)</h3>
            <p class="text-muted mb-0">Sie haben das Recht, der Verarbeitung Ihrer Daten zu widersprechen.</p>
           </div>
          </div>
         </div>
        </div>
        <div class="alert alert-info mt-4" role="alert">
         <h4 class="alert-heading">Beschwerderecht</h4>
         <p>Sie haben das Recht, sich bei einer Datenschutz-Aufsichtsbehörde über die Verarbeitung Ihrer personenbezogenen Daten zu beschweren.</p>
         <hr>
         <p class="mb-0"><strong>Zuständige Aufsichtsbehörde:</strong>
          <br>
          Berliner Beauftragte für Datenschutz und Informationsfreiheit
          <br>
          Friedrichstr. 219, 10969 Berlin</p>
        </div>
       </section>
       <!-- 8. Speicherdauer -->
       <section id="speicherdauer" class="mb-5 scroll-margin-top" data-aos="fade-up" data-aos-delay="700">
        <h2 class="h3 fw-bold text-dark mb-3">8. Speicherdauer</h2>
        <div class="table-responsive">
         <table class="table table-striped">
          <thead class="table-dark">
           <tr>
            <th>Datenart</th>
            <th>Speicherdauer</th>
            <th>Grund</th>
           </tr>
          </thead>
          <tbody>
           <tr>
            <td>Server-Logfiles</td>
            <td>30 Tage</td>
            <td>Technische Sicherheit</td>
           </tr>
           <tr>
            <td>Kontaktanfragen</td>
            <td>3 Jahre</td>
            <td>Bearbeitung und Dokumentation</td>
           </tr>
           <tr>
            <td>Cookie-Einwilligungen</td>
            <td>2 Jahre</td>
            <td>Nachweis der Einwilligung</td>
           </tr>
           <tr>
            <td>Session-Cookies</td>
            <td>Ende der Session</td>
            <td>Technische Notwendigkeit</td>
           </tr>
          </tbody>
         </table>
        </div>
       </section>
       <!-- 9. Datensicherheit -->
       <section id="sicherheit" class="mb-5 scroll-margin-top" data-aos="fade-up" data-aos-delay="800">
        <h2 class="h3 fw-bold text-dark mb-3">9. Datensicherheit</h2>
        <div class="row">
         <div class="col-lg-8">
          <p class="text-muted mb-4">Wir treffen umfassende technische und organisatorische Maßnahmen zum Schutz Ihrer Daten:</p>
          <div class="row">
           <div class="col-md-6">
            <h3 class="h6 fw-bold text-success mb-2">Technische Maßnahmen</h3>
            <ul class="text-muted">
             <li>SSL-/TLS-Verschlüsselung</li>
             <li>Firewall-Schutz</li>
             <li>Regelmäßige Sicherheitsupdates</li>
             <li>Sichere Server-Konfiguration</li>
             <li>Datensicherungen</li>
            </ul>
           </div>
           <div class="col-md-6">
            <h3 class="h6 fw-bold text-success mb-2">Organisatorische Maßnahmen</h3>
            <ul class="text-muted">
             <li>Zugriffsbeschränkungen</li>
             <li>Mitarbeiterschulungen</li>
             <li>Datenschutz-Folgenabschätzung</li>
             <li>Vertraulichkeitsverpflichtungen</li>
             <li>Regelmäßige Überprüfungen</li>
            </ul>
           </div>
          </div>
         </div>
         <div class="col-lg-4">
          <div class="card border-success">
           <div class="card-header bg-success text-white">
            <h3 class="h6 mb-0">Sicherheitszertifikate</h3>
           </div>
           <div class="card-body">
            <ul class="mb-0">
             <li>SSL-Zertifikat</li>
             <li>DSGVO-konform</li>
             <li>Deutsche Server</li>
             <li>ISO 27001 Standard</li>
            </ul>
           </div>
          </div>
         </div>
        </div>
       </section>
       <!-- 10. Änderungen -->
       <section id="aenderungen" class="mb-5 scroll-margin-top" data-aos="fade-up" data-aos-delay="900">
        <h2 class="h3 fw-bold text-dark mb-3">10. Änderungen der Datenschutzerklärung</h2>
        <div class="alert alert-primary" role="alert">
         <p>Wir behalten uns vor, diese Datenschutzerklärung bei Bedarf anzupassen, um sie stets an aktuelle rechtliche Anforderungen anzupassen oder um Änderungen unserer Leistungen umzusetzen.</p>
         <p class="mb-0">Für Ihren erneuten Besuch gilt dann die neue Datenschutzerklärung. Wir empfehlen, diese Seite regelmäßig aufzurufen.</p>
        </div>
       </section>
       <!-- Kontakt-Box -->
       <section class="contact-box" data-aos="fade-up" data-aos-delay="1000">
        <div class="card border-primary">
         <div class="card-header bg-primary text-white">
          <h2 class="h5 mb-0">Fragen zum Datenschutz?</h2>
         </div>
         <div class="card-body">
          <p>Bei Fragen zu dieser Datenschutzerklärung oder zur Verarbeitung Ihrer Daten können Sie sich jederzeit an uns wenden:</p>
          <div class="row">
           <div class="col-md-6">
            <p><strong>E-Mail:</strong> <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;"><!--?php echo SUPPORT_EMAIL; ?--></a></p>
            <p><strong>Telefon:</strong> <a href="tel:&lt;?php echo str_replace(' ', '', BUSINESS_PHONE); ?&gt;"><!--?php echo BUSINESS_PHONE; ?--></a></p>
           </div>
           <div class="col-md-6">
            <p><strong>Postanschrift:</strong>
             <br>
             <!--?php echo str_replace(', ', '<br-->', BUSINESS_ADDRESS); ?&gt;</p>
           </div>
          </div>
          <div class="text-center">
           <a href="/contact" class="btn btn-primary">Kontakt aufnehmen</a>
          </div>
         </div>
        </div>
       </section>
      </div>
     </div>
    </div>
   </article>
  </div>
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